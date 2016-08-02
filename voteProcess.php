<?php
session_start();

if (isset($_POST['faculty_id'])) {
    $faculty_id = $_POST['faculty_id'];
    $student_email = $_SESSION['email'];

    require_once 'models/FacultyModel.php';
    require_once 'models/StudentModel.php';
    require_once 'models/VoteModel.php';
    require_once 'entities/VoteEntity.php';

    $facultyModel = new FacultyModel();
    $faculty_name = $facultyModel->getFacultyName($faculty_id);

    $studentModel = new StudentModel();
    $student_id = $studentModel->getStudentId($student_email);
    $voteModel = new VoteModel();
    $vote = $voteModel->getVote($student_id, $faculty_id);
    $first_time_voting = false;
    if ($vote == NULL) {
        $vote = new VoteEntity($student_id, $faculty_id, NULL, NULL, NULL);
        $first_time_voting = true;
    }
} else
    echo 0;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/voteModal.css" rel="stylesheet">
        <!-- jQuery -->

        <script src="./js/voteModal.js"></script>
    </head>
    <body>

        <h3 class="text-center" style="margin-bottom: 30px;"><?php echo $faculty_name; ?></h3>

        <div class = "price-slider">
            <h4 class = "great">Helpfulness</h4>
            <div class = "col-sm-12">
                <input class="hidden"  id="helpfulness_slider_value" value="<?php echo $vote->helpfulness; ?>">
                <div id = "helpfulness_slider"></div>
            </div> 
        </div>

        <div class = "price-slider">
            <h4 class = "great">Clarity</h4>
            <div class = "col-sm-12">
                <input class="hidden" id="clarity_slider_value" value="<?php echo $vote->clarity; ?>">
                <div id = "clarity_slider"></div>
            </div>
        </div>

        <div class = "price-slider"> 
            <h4 class = "great">Easiness</h4>
            <div class = "col-sm-12">
                <input class="hidden" id="easiness_slider_value" value="<?php echo $vote->easiness; ?>">
                <div id = "easiness_slider"></div>
            </div>
        </div>
        <input class="hidden" id="first_time_voting" value="<?php echo $first_time_voting; ?>">
        <input class="hidden" id="student_id" value="<?php echo $vote->student_id; ?>">
        <input class="hidden" id="faculty_id" value="<?php echo $vote->faculty_id; ?>">
    </body>
</html>