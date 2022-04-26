$(document).ready(function() {
    console.log('Script loaded: form_task.js');

    $('#form_task').submit(sendForm);
    $(document).on('submit', '.delete_form', sendForm);
});

function sendForm(e) {
    e.preventDefault();

    var form = $(this);
    var formData = new FormData(this);

    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            $('#task_list').load($(location).attr('href') + ' #task_list');
        }
    });
}