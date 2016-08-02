<?php
require_once 'models/FacultyModel.php';

$facultyModel = new FacultyModel();
$facultyArray = $facultyModel->getFacultyList();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-11">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="text-right">
                        <button type="button" class="btn btn-sm btn-primary btn-create"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="panel-body" style="min-height: 500px; overflow-y: auto">
                    <table id="facultyTable">

                        <thead>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>

                            <?php foreach ($facultyArray as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->name ?></td>
                                    <td><?= $value->designation ?></td>
                                    <td><?= $value->email ?></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#faculty_edit" data-faculty_id="<?php echo $value->id; ?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#faculty_delete" data-faculty_id="<?php echo $value->id; ?>"  ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>

<div class="modal fade" id="faculty_edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="">
                </div>
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="">
                </div>
            </div>
            <div class="modal-footer ">
                <input class="hidden" id="faculty_id_edit">
                <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" onclick="faculty_edit()" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>



<div class="modal fade" id="faculty_delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <input class="hidden" id="faculty_id_delete">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="faculty_delete()" ><span class="glyphicon glyphicon-ok-sign"></span>Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
</div>