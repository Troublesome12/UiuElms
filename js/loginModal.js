
$('#student-login-form-link').click(function (e) {
    $("#student-login-form").delay(100).fadeIn(100);
    $("#student-register-form").fadeOut(100);
    $('#student-register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

$('#student-register-form-link').click(function (e) {
    $("#student-register-form").delay(100).fadeIn(100);
    $("#student-login-form").fadeOut(100);
    $('#student-login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

$('#student_login_email').blur(function () {
    var email = $(this).val();
    if (email.endsWith('uiu.ac.bd')) {
        $('#student_login_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#student_login_message').removeClass('hidden');
        $('#student_login_message').text('Please use the email that uiu provided');
    }
});

$('#student_login_password').blur(function () {
    var password = $(this).val().length;
    if (password >= 5) {
        $('#student_login_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#student_login_message').removeClass('hidden');
        $('#student_login_message').text('Password is too short');
    }
});

$('#student_reg_name').blur(function () {
    var name = $(this).val().length;
    if (name >= 5) {
        $('#student_reg_message').addClass('hidden');
        $(this).css("border", "2px solid green");
        document.getElementById("student_reg_button").disabled = false;
    } else {
        $(this).css("border", "2px solid red");
        $('#student_reg_message').removeClass('hidden');
        $('#student_reg_message').text('Please provide your full name');
        document.getElementById("student_reg_button").disabled = true;
    }
});

$('#student_reg_id').blur(function () {
    var id = $(this).val();
    if (id.length == 9) {
        $.ajax({
            type: "POST",
            url: "loginProcess.php",
            data: {student_reg_id: id},
            success: function (msg) {
                if (msg == 0) {
                    $('#student_reg_message').addClass('hidden');
                    $('#student_reg_id').css("border", "2px solid green");
                    document.getElementById("student_reg_button").disabled = false;
                } else {
                    $('#student_reg_id').css("border", "2px solid red");
                    $('#student_reg_message').removeClass('hidden');
                    $('#student_reg_message').text('Student id already exists');
                    document.getElementById("student_reg_button").disabled = true;
                }
            }
        });
    } else {
        $(this).css("border", "2px solid red");
        $('#student_reg_message').removeClass('hidden');
        $('#student_reg_message').text('Please provide your UIU id number');
        document.getElementById("student_reg_button").disabled = true;
    }
});

$('#student_reg_email').blur(function () {
    var email = $(this).val();
    if (email.endsWith('uiu.ac.bd')) {
        $.ajax({
            type: "POST",
            url: "loginProcess.php",
            data: {student_reg_email: email},
            success: function (msg) {
                if (msg == 0) {
                    $('#student_reg_message').addClass('hidden');
                    $('#student_reg_email').css("border", "2px solid green");
                    document.getElementById("student_reg_button").disabled = false;
                } else {
                    $('#student_reg_email').css("border", "2px solid red");
                    $('#student_reg_message').removeClass('hidden');
                    $('#student_reg_message').text('Student email already exists');
                    document.getElementById("student_reg_button").disabled = true;
                }
            }
        });
    } else {
        $(this).css("border", "2px solid red");
        $('#student_reg_message').removeClass('hidden');
        $('#student_reg_message').text('Please use the email that uiu provided');
        document.getElementById("student_reg_button").disabled = true;
    }
});

$('#student_reg_password').blur(function () {
    var password = $(this).val();
    if (password.length >= 5) {
        $('#student_reg_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#student_reg_message').removeClass('hidden');
        $('#student_reg_message').text('Password is too short');
        document.getElementById("student_reg_button").disabled = true;
    }

    var confirmPassword = $('#student_reg_confirm_password').val();
    if (confirmPassword > 0) {

        if (password == confirmPassword) {
            $('#student_reg_message').addClass('hidden');
            $('#student_reg_confirm_password').css("border", "2px solid green");
            document.getElementById("student_reg_button").disabled = false;
        } else if (password >= 5) {
            $('#student_reg_confirm_password').css("border", "2px solid red");
            $('#student_reg_message').removeClass('hidden');
            $('#student_reg_message').text('Password doesn\'t match');
            document.getElementById("student_reg_button").disabled = true;
        } else if (password < 5) {
            $('#student_reg_confirm_password').css("border", "2px solid red");
            $('#student_reg_message').removeClass('hidden');
            $('#student_reg_message').text('Password is too short');
            document.getElementById("student_reg_button").disabled = true;
        }
    }
});

$('#student_reg_confirm_password').blur(function () {
    var password = $('#student_reg_password').val();
    var confirmPassword = $(this).val();
    if (password == confirmPassword) {
        $('#student_reg_message').addClass('hidden');
        $(this).css("border", "2px solid green");
        document.getElementById("student_reg_button").disabled = false;
    } else {
        $(this).css("border", "2px solid red");
        $('#student_reg_message').removeClass('hidden');
        $('#student_reg_message').text('Password doesn\'t match');
        document.getElementById("student_reg_button").disabled = true;
    }
});

$('#faculty_login_email').blur(function () {
    var email = $(this).val();
    if (email.endsWith('uiu.ac.bd')) {
        $('#faculty_login_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#faculty_login_message').removeClass('hidden');
        $('#faculty_login_message').text('Please use the email that uiu provided');
    }
});

$('#faculty_login_password').blur(function () {
    var password = $(this).val().length;
    if (password >= 5) {
        $('#faculty_login_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#faculty_login_message').removeClass('hidden');
        $('#faculty_login_message').text('Password is too short');
    }
});

$('#admin_login_email').blur(function () {
    var email = $(this).val();
    if (email.endsWith('uiu.ac.bd')) {
        $('#admin_login_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#admin_login_message').removeClass('hidden');
        $('#admin_login_message').text('Please use the email that uiu provided');
    }
});

$('#admin_login_password').blur(function () {
    var password = $(this).val().length;
    if (password >= 5) {
        $('#admin_login_message').addClass('hidden');
        $(this).css("border", "2px solid green");
    } else {
        $(this).css("border", "2px solid red");
        $('#admin_login_message').removeClass('hidden');
        $('#admin_login_message').text('Password is too short');
    }
});

function student_login_form_submit() {
    var email = $('#student_login_email').val();
    var password = $('#student_login_password').val();
    var remember = 0;
    if ($('#student_login_remember').is(':checked'))
        remember = 1;
    if (email.endsWith('uiu.ac.bd') && password.length >= 5) {
        $.getScript("./js/sha1.js", function () {
            password = CryptoJS.SHA1(password);
        });
        $.ajax({
            type: "POST",
            url: "loginProcess.php",
            data: {student_login_email: email, student_login_password: password, student_login_remember: remember},
            success: function (msg) {
                if (msg == 1) {
                    window.location.replace("index.php");
                } else {
                    $.getScript("./js/shake.js", function () {
                        $('#studentModal').shake();
                        $('#student_login_message').removeClass('hidden');
                        $('#student_login_message').text('Wrong email or password');
                        $('#student_login_email').css("border", "2px solid red");
                        $('#student_login_password').css("border", "2px solid red");
                    });
                }
            }
        });
    } else {
        $.getScript("./js/shake.js", function () {
            $('#studentModal').shake();
        });
    }
}

function student_reg_form_submit(){
    var name = $('#student_reg_name').val();
    var id = $('#student_reg_id').val();
    var email = $('#student_reg_email').val();
    var password = $('#student_reg_password').val();
    
    $.ajax({
            type: "POST",
            url: "loginProcess.php",
            data: {student_reg_name: name, student_reg_id : id, student_reg_email: email, student_reg_password : password},
            success: function (msg) {
                if (msg == 1) {
                    window.location.replace("index.php");
                } else {
                    alert(msg);
                }
            }
        });
}

function faculty_login_form_submit() {
    var email = $('#faculty_login_email').val();
    var password = $('#faculty_login_password').val();
    var remember = 0;
    if ($('#faculty_login_remember').is(':checked'))
        remember = 1;
    if (email.endsWith('uiu.ac.bd') && password.length >= 5) {
        $.getScript("./js/sha1.js", function () {
            password = CryptoJS.SHA1(password);
        });
        $.ajax({
            type: "POST",
            url: "loginProcess.php",
            data: {faculty_login_email: email, faculty_login_password: password, faculty_login_remember: remember},
            success: function (msg) {
                if (msg == 1) {
                    window.location.replace("index.php");
                } else {
                    $.getScript("./js/shake.js", function () {
                        $('#facultyModal').shake();
                        $('#faculty_login_message').removeClass('hidden');
                        $('#faculty_login_message').text('Wrong email or password');
                        $('#faculty_login_email').css("border", "2px solid red");
                        $('#faculty_login_password').css("border", "2px solid red");
                    });
                }
            }
        });
    } else {
        $.getScript("./js/shake.js", function () {
            $('#facultyModal').shake();
        });
    }
}

function admin_login_form_submit() {
    var email = $('#admin_login_email').val();
    var password = $('#admin_login_password').val();
    var remember = 0;
    if ($("#admin_login_remember").is(':checked')) {
        remember = 1;
    }
    if (email.endsWith('uiu.ac.bd') && password.length >= 5) {
        $.getScript("./js/sha1.js", function () {
            password = CryptoJS.SHA1(password);
        });
        $.ajax({
            type: "POST",
            url: "loginProcess.php",
            data: {admin_login_email: email, admin_login_password: password, admin_login_remember: remember},
            success: function (msg) {
                if (msg == 1) {
                    window.location.replace("index.php");
                } else {
                    $.getScript("./js/shake.js", function () {
                        $('#adminModal').shake();
                        $('#admin_login_message').removeClass('hidden');
                        $('#admin_login_message').text('Wrong email or password');
                        $('#admin_login_email').css("border", "2px solid red");
                        $('#admin_login_password').css("border", "2px solid red");
                    });
                }
            }
        });
    } else {
        $.getScript("./js/shake.js", function () {
            $('#adminModal').shake();
        });
    }
}