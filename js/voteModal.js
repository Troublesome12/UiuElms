$("#helpfulness_slider").slider({
    animate: true,
    min: 1,
    max: 5,
    step: 1,
    slide: function (event, ui) {
        update_helpfulness_slider(ui.value); //changed
    }
});

$("#clarity_slider").slider({
    animate: true,
    min: 1,
    max: 5,
    step: 1,
    slide: function (event, ui) {
        update_clarity_slider(ui.value); //changed
    }
});

$("#easiness_slider").slider({
    animate: true,
    min: 1,
    max: 5,
    step: 1,
    slide: function (event, ui) {
        update_easiness_slider(ui.value); //changed
    }
});

$("#helpfulness_slider").slider("value", document.getElementById("helpfulness_slider_value").value);
$("#clarity_slider").slider("value", document.getElementById("clarity_slider_value").value);
$("#easiness_slider").slider("value", document.getElementById("easiness_slider_value").value);

update_helpfulness_slider($("#helpfulness_slider").slider("value"));
update_clarity_slider($("#clarity_slider").slider("value"));
update_easiness_slider($("#easiness_slider").slider("value"));

function update_helpfulness_slider(val) {
    $('#helpfulness_slider a').html('<label><span class="fa fa-chevron-left"></span> ' + val + ' <span class="fa fa-chevron-right"></span></label>');
}

function update_clarity_slider(val) {
    $('#clarity_slider a').html('<label><span class="fa fa-chevron-left"></span> ' + val + ' <span class="fa fa-chevron-right"></span></label>');
}

function update_easiness_slider(val) {
    $('#easiness_slider a').html('<label><span class="fa fa-chevron-left"></span> ' + val + ' <span class="fa fa-chevron-right"></span></label>');
}

function submitVote() {
    var helpfulness = $("#helpfulness_slider").slider("value");
    var clarity = $("#clarity_slider").slider("value");
    var easiness = $("#easiness_slider").slider("value");
    var first_time_voting = document.getElementById("first_time_voting").value;
    var student_id = document.getElementById("student_id").value;
    var faculty_id = document.getElementById("faculty_id").value;

    $.ajax({
        type: "POST",
        url: "insertVote.php",
        data: {student_id: student_id, faculty_id: faculty_id, helpfulness: helpfulness, clarity: clarity, easiness: easiness, first_time_voting: first_time_voting},
        cache: false,
        success: function (data) {
            alert(data);
            window.location.reload();
        }
    });
}