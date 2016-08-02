<?php
require_once 'models/FacultyModel.php';
require_once 'models/SkillModel.php';

$facultyModel = new FacultyModel();
$skillModel = new SkillModel();
$facultyArray = $facultyModel->getFacultyList();
?>

<!DOCTYPE html>
<div class="container">
    <?php
    foreach ($facultyArray as $key => $value) {
        $skill = $skillModel->getSkillById($value->id);
        ?>  <!--fetch the skill of each faculty -->
        <div class="well">
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="img/user/<?= $value->image ?>">
                </a>
                <div class="media-body">           
                    <?php
                    if ($_SESSION['status'] == 'student') {
                        echo "<a href='#' data-toggle='modal' data-target='#voteModal' data-faculty_id='$value->id'><span class='glyphicon glyphicon-edit pull-right'></span></a>";
                    }
                    ?>
                    <h3 class="media-heading"><strong><?= $value->name ?></strong></h3>
                    <p><?= $value->designation ?></p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="1" aria-valuemax="5" style="width: <?= $skill->helpfulness / 5 * 100 ?>%"></div>
                        <span class="progress-type">HELPFULNESS</span>
                        <span class="progress-completed"><?= round($skill->helpfulness, 2) ?></span>
                    </div>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuemin="1" aria-valuemax="5" style="width: <?= $skill->clarity / 5 * 100 ?>%"></div>
                        <span class="progress-type">CLARITY</span>
                        <span class="progress-completed"><?= round($skill->clarity, 2) ?></span>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="1" aria-valuemax="5" style="width: <?= $skill->easiness / 5 * 100 ?>%"></div>
                        <span class="progress-type">EASINESS</span>
                        <span class="progress-completed"><?= round($skill->easiness, 2) ?></span>
                    </div>

                    <ul class="list-inline list-unstyled">
                        <li><span><i class="fa fa-check-square-o" style="margin-right: 10px;"></i><?= $skill->voter . ' votes ' ?></span></li>
                        <li style="margin-right: 10px; margin-left: 10px">|</li>
                        <span><i class="glyphicon glyphicon-comment" style="margin-right: 10px;"></i> 0 comments</span>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>

    <!--- Modal --->
    <div class="modal fade" id="voteModal" role="dialog">
        <div class="modal-dialog">

            Modal content
            <div class="modal-body">

                <div class="price-box">

                    <form class="form-horizontal form-pricing" role="form">
                        <div class="dash">


                        </div>
                        <a class="btn btn-success btn-lg center-block" data-toggle='modal' data-target='#voteModal' onclick="submitVote()">Submit</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---END OF MODAL--->