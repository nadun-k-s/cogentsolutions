$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/RegisterController/submit',
            type: 'POST',
            data: $(this).serialize(),
            success: function (res) {
                const json = JSON.parse(res);
                $('#formMessage').text(json.success ? 'Registration successful!' : 'Failed to register.');
                $('#registerForm')[0].reset();
            }
        });
    });
});

$('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 70
    }, 500);
});
