<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UIU</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- My custom CSS -->
        <link href="css/my-website.css" rel="stylesheet">
        <link href="css/loginModal.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.php">UIU</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="login" role="button" data-toggle="modal" data-target="#studentModal" href="#" >Student</a></li>
                        <li><a class="login" role="button" data-toggle="modal" data-target="#facultyModal" href="#">Faculty</a></li>
                        <li><a class="login" role="button" data-toggle="modal" data-target="#adminModal" href="#">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!---End of Navigation --->

        <!-- BEGINNING OF STUDENT MODAL -->
        <div class="modal fade" id="studentModal" role="dialog">
            <div class="modal-content">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="student-login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="student-register-form-link">Sign Up</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <center><h4>Student</h4></center>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="student-login-form" action="" method="" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="email"  name="email" id="student_login_email" tabindex="1" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="student_login_password" tabindex="2" class="form-control" placeholder="Password" required minlength=5>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" id="student_login_remember" tabindex="3" class="" name="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input onclick="student_login_form_submit()" type="button" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <center><span id="student_login_message" class='text-danger hidden' style="margin: 10px; font-weight: bold;"></span></center>
                                        
                                        <!--<div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </form>
                                    <form id="student-register-form" action="" method="" role="form" style="display: none;">
                                        <div class="form-group">
                                            <input type="text" name="name" id="student_reg_name" tabindex="1" class="form-control" placeholder="Full name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="id" id="student_reg_id" tabindex="2" class="form-control" placeholder="Id" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="student_reg_email" tabindex="3" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="student_reg_password" tabindex="4" class="form-control" placeholder="Password" required minlength=5>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm-password" id="student_reg_confirm_password" tabindex="5" class="form-control" placeholder="Confirm Password" required minlength=5>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input id="student_reg_button" onclick="student_reg_form_submit()" type="button" tabindex="6" class="form-control btn btn-register" value="Register">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <center><span id="student_reg_message" class='text-danger hidden' style="margin: 10px; font-weight: bold;"></span></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF STUDENT MODAL -->

        <!-- BEGINNING OF FACULTY MODAL -->
        <div class="modal fade" id="facultyModal" role="dialog">
            <div class="modal-content">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <center><a href="#" class="active" id="faculty-login-form-link">Login</a></center>
                            </div>
                            <hr>
                        </div>
                        <center><h4>Faculty</h4></center>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="faculty-login-form" action="" method="" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="email" name="email" id="faculty_login_email" tabindex="1" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="faculty_login_password" tabindex="2" class="form-control" placeholder="Password" required minlength=5>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" id="faculty_login_remember" tabindex="3" class="" name="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="button" onclick="faculty_login_form_submit()" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <center><span id="faculty_login_message" class='text-danger hidden' style="margin: 10px; font-weight: bold;"></span></center>
                                        <!--<div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF FACULTY MODAL -->


        <!-- BEGINNING OF ADMIN MODAL -->
        <div class="modal fade" id="adminModal" role="dialog">
            <div class="modal-content">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <center><a href="#" class="active" id="admin-login-form-link">Login</a></center>
                            </div>
                            <hr>
                        </div>
                        <center><h4>Admin</h4></center>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="admin-login-form" action="" method="" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="email" name="email" id="admin_login_email" tabindex="1" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="admin_login_password" tabindex="2" class="form-control" placeholder="Password" required minlength=5>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" id="admin_login_remember" tabindex="3" class="" name="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="button" tabindex="4" onclick="admin_login_form_submit()" class="form-control btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <center><span id="admin_login_message" class='text-danger hidden' style="margin: 10px"></span></center>
                                        <!--<div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF ADMIN MODAL -->

        <!-- jQuery -->
        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/my-website.js"></script>
        <script src="./js/loginModal.js"></script>
    </body>
</html>