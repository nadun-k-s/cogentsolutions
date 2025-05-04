$(document).ready(function () {
    $('#registration-form').on('submit', function (e) {
        e.preventDefault();

        $('.error-message').text('');

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '../submit.php',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    alert('Registration successful!');
                } else {
                    for (var field in response.errors) {
                        $('#' + field + '-error').text(response.errors[field]);
                    }
                }
            },
            error: function () {
                alert('There was an error submitting the form.');
            }
        });
    });
});
