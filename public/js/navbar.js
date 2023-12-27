$(document).ready(function () {
    $('#eye-password').click(function () {
        if ($('#password-input').attr('type') == 'password') {
            $('#password-input').attr('type', 'text');
            $('#eye-password').removeClass('fa-eye');
            $('#eye-password').addClass('fa-eye-slash');
        } else {
            $('#password-input').attr('type', 'password');
            $('#eye-password').removeClass('fa-eye-slash');
            $('#eye-password').addClass('fa-eye');
        }
    })
    $('#eye-re-password').click(function () {
        if ($('#re-password-input').attr('type') == 'password') {
            $('#re-password-input').attr('type', 'text');
            $('#eye-re-password').removeClass('fa-eye');
            $('#eye-re-password').addClass('fa-eye-slash');
        } else {
            $('#re-password-input').attr('type', 'password');
            $('#eye-re-password').removeClass('fa-eye-slash');
            $('#eye-re-password').addClass('fa-eye');
        }
    })
    $('#eye-pass').click(function () {
        if ($('#pass').attr('type') == 'password') {
            $('#pass').attr('type', 'text');
            $('#eye-pass').removeClass('fa-eye');
            $('#eye-pass').addClass('fa-eye-slash');
        } else {
            $('#pass').attr('type', 'password');
            $('#eye-pass').removeClass('fa-eye-slash');
            $('#eye-pass').addClass('fa-eye');
        }
    })

    $("#show-dropdown").click(function () {
        $(".dropdown-content").toggle();
    });

    // $("#logoutButton").click(function () {
    //     $.ajax({
    //         url: '/logout',
    //         type: 'POST',
    //         headers: {
    //             'Content-Type': 'application/json',
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}',
    //         },
    //         error: function (xhr, status, error) {
    //             console.log(error);
    //         },
    //     })
    // })
})