<?php
require_once 'models/CourseModel.php';

if (isset($_GET['course'])) {
    $course = $_GET['course'];
    $section = $_GET['section'];
    $courseModel = new CourseModel();
    $course = $courseModel->getCourseNameBycode($course);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/tab.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="box" style="max-height: 1000px; min-height: 500px; overflow-y: auto;">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong><?php echo $course . ' (Sec - ' . $section . ')'; ?></strong>
                        </h2>
                        <hr>
                        
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel with-nav-tabs panel-default" >
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a href="#tab1" data-toggle="tab">HOME</a></li>
                                            <li><a href="#tab2" data-toggle="tab">ASSIGNMENT</a></li>
                                            <li><a href="#tab3" data-toggle="tab">EXAM</a></li>                          
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1"><?php include './contact.php' ;?></div>
                                            <div class="tab-pane" id="tab2">Default 2</div>
                                            <div class="tab-pane" id="tab3">Default 3</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>