<?php
require_once 'models/FacultyModel.php';
require_once 'models/StudentModel.php';
require_once 'models/AdminModel.php';

if ($_SESSION['status'] == 'faculty') {
    $facultyModel = new FacultyModel();
    $user = $facultyModel->getFacultyInfo($_SESSION['email']);
} else if ($_SESSION['status'] == 'student') {
    $studentModel = new StudentModel();
    $user = $studentModel->getStudentInfo($_SESSION['email']);
} else {
    $adminModel = new AdminModel();
    $user = $adminModel->getAdminInfo($_SESSION['email']);
}
?>

<html>
    <body>
        <div class="container" style="padding-top: 70px; padding-bottom: 70px">
            <div class="panel" style="min-height: 550px; padding-bottom: 20px">
                <h1 class="page-header text-center">Edit Profile</h1>
                <div class="row" style="padding-top: 20px;">
                    <form class="form-horizontal" action="updateProcess.php" method='post' enctype='multipart/form-data'>
                        <!-- left column -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="text-center">
                                <img id='user_image_preview' src="img/user/<?= $user->image ?>" class="avatar img-circle img-thumbnail" onError="this.src='img/default.png';">
                                <h6>Upload a different photo...</h6>
                                <input id='user_image_input' type="file" name='file' class="text-center center-block well well-sm">
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                            <h3>Personal info</h3>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" value="<?= $user->name ?>" type="text" name="name">
                                </div>
                            </div>
                            <?php if ($_SESSION['status'] == "faculty") { ?>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Designation:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="<?= $user->designation ?>" type="text" name="designation">
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" value="<?= $user->email ?>" type="text" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password:</label>
                                <div class="col-md-8">
                                    <input id="user_password_input" class="form-control" value="<?= $user->password ?>" type="password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Confirm password:</label>
                                <div class="col-md-8">
                                    <input id="user_confirm_password_input" class="form-control" value="<?= $user->password ?>" type="password" name="confirm_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input id="user_info_edit_submit" class="btn btn-primary" value="Save" type="submit" name="submit">
                                    <input class="btn btn-default" value="Cancel" type="reset">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?= $user->id ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- My Website JavaScript -->
        <script src="./js/my-website.js"></script>
    </body>
</html>