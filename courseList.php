<?php
require_once 'models/CourseModel.php';
require_once 'models/SectionModel.php';

$courseModel = new CourseModel();
$sectionModel = new SectionModel();
$courseArray = $courseModel->getCourseList();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            .panel-info > .panel-heading {
                color: #333;
                background-color: #d9edf7;
                border-color: #edf7d9;
                text-align: center;
            }
            .panel-group .panel {
                margin-bottom: 0;
                border-radius: 0px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="box" style="min-height: 800px;">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong>List of courses</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <h2 class="intro-text text-center"><a href="#">My Courses</a><br/></h2>
                        <h2 class="intro-text text-center"><a href="#">All Courses</a><br/></h2>
                    </div>


                    <div  class="col-md-4 col-md-offset-2" style="height:600px; overflow-y: auto;">
                        <div class="panel-group" id="accordion">
                            <?php foreach ($courseArray as $key => $value) { ?>
                                <div class="panel panel-info" >
                                    <div class="panel-heading" >
                                        <h4 class="panel-title" >
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $value->code; ?>"><?= $value->name; ?></a>
                                        </h4>
                                    </div>

                                    <div id="collapse<?= $value->code; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php
                                            $secttionArray = $sectionModel->getSectionBycode($value->code);
                                            foreach ($secttionArray as $key => $sec) {
                                                ?>
                                                <ul id="<?= $value->code; ?>-sections" class="list-group">
                                                    <li class="list-group-item"><a href="index.php?mode=course&course=<?= $value->code; ?>&section=<?= $sec; ?>"><?= $sec; ?></a></li>                                                       
                                                </ul>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>