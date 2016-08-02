<html>
    <head>
        <link href="css/table.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="box">


                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel with-nav-tabs panel-default" >
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#tab1" data-toggle="tab">Student</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Faculty</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Admin</a></li>                          
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1"><?php include './studentManagement.php'; ?></div>
                                        <div class="tab-pane" id="tab2"><?php include './facultyManagement.php'; ?></div>
                                        <div class="tab-pane" id="tab3"><?php include './adminManagement.php'; ?></div>
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

