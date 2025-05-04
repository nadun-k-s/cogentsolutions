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
                    $('#registration-form')[0].reset();
                    // alert('Registration successful!');
                    Swal.fire({
                        icon: 'success',
                        title: 'Registration Complete!',
                        text: 'Thank you for registering. We will get in touch with you soon.',
                        confirmButtonColor: '#3085d6',
                    });
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
