$(window).scroll(function () {
    if ($(window).width() >= 1000) {
        if ($(window).scrollTop() > 175) {
            $('nav').addClass('navbar-fixed-top');
        } else {
            $('nav').removeClass('navbar-fixed-top');
        }
    } else {
        $('nav').addClass('navbar-fixed-top');
    }
});

$(function () {
    $('#voteModal').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var faculty_id = link.data('faculty_id'); // Extract info from data-* attributes
        var modal = $(this);

        $.ajax({
            type: "POST",
            url: "voteProcess.php",
            data: {faculty_id: faculty_id},
            cache: false,
            success: function (data) {
                if (data != 0)
                    modal.find('.dash').html(data);
            }
        });
    });

    $('#student_delete').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var student_id = link.data('student_id'); // Extract info from data-* attributes
        document.getElementById('student_id_delete').value = student_id;
    });


    $('#student_edit').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var student_id = link.data('student_id'); // Extract info from data-* attributes
        document.getElementById('student_id_edit').value = student_id;
    });

    $('#faculty_delete').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var faculty_id = link.data('faculty_id'); // Extract info from data-* attributes
        document.getElementById('faculty_id_delete').value = faculty_id;
    });


    $('#faculty_edit').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var faculty_id = link.data('faculty_id'); // Extract info from data-* attributes
        document.getElementById('faculty_id_edit').value = faculty_id;
    });

    $('#admin_delete').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var admin_id = link.data('admin_id'); // Extract info from data-* attributes
        document.getElementById('admin_id_delete').value = admin_id;
    });


    $('#admin_edit').on('show.bs.modal', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal
        var admin_id = link.data('admin_id'); // Extract info from data-* attributes
        document.getElementById('admin_id_edit').value = admin_id;
    });
    
    $("#user_password_input").blur(function () {
        var pass1 = $("#user_password_input").val();
        var pass2 = $("#user_confirm_password_input").val();

        if (pass1 != pass2 || pass1.length < 5)
            document.getElementById("user_info_edit_submit").disabled = true;
        else
            document.getElementById("user_info_edit_submit").disabled = false;
    });

    $("#user_confirm_password_input").blur(function () {
        var pass1 = $("#user_password_input").val();
        var pass2 = $("#user_confirm_password_input").val();

        if (pass1 != pass2 || pass1.length < 5)
            document.getElementById("user_info_edit_submit").disabled = true;
        else
            document.getElementById("user_info_edit_submit").disabled = false;
    });

    $("#user_image_input").change(function () {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#user_image_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});

function student_edit() {
    var student_id = document.getElementById('student_id_edit').value;
    alert(student_id);
}

function student_delete() {
    var student_id = document.getElementById('student_id_delete').value;
    $.ajax({
        type: "POST",
        url: "managementProcess.php",
        data: {student_id: student_id},
        cache: false,
        success: function () {
            window.location.reload();
        }
    });
}

function faculty_edit() {
    var faculty_id = document.getElementById('faculty_id_edit').value;
    alert(faculty_id);
}

function faculty_delete() {
    var faculty_id = document.getElementById('faculty_id_delete').value;
    $.ajax({
        type: "POST",
        url: "managementProcess.php",
        data: {faculty_id: faculty_id},
        cache: false,
        success: function () {
            window.location.reload();
        }
    });
}

function admin_edit() {
    var admin_id = document.getElementById('admin_id_edit').value;
    alert(admin_id);
}

function admin_delete() {
    var admin_id = document.getElementById('admin_id_delete').value;
    $.ajax({
        type: "POST",
        url: "managementProcess.php",
        data: {admin_id: admin_id},
        cache: false,
        success: function () {
            window.location.reload();
        }
    });
}