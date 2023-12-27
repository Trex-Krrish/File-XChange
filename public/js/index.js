$(document).ready(function () {
    $(window).on("load", function () {
        $('.loading-container').fadeOut(500, function () {
            $(this).remove();
        });
    })

    $(".close-icon").click(function () {
        $(".alert-body").fadeOut(500, function () {
            $(this).remove();
        });
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    
    $('.uploader-img').click(function () {

        let user_id = $(this).next('.user_id').val();

        $.ajax({
            url: '/profile/get-user/detail',
            method: 'POST',
            data: {
                user_id: user_id
            },
            success: function (data) {
                let user = data.user;
                $('.profile-preview').fadeIn(250);
                if(user.image !== 'default.jpg'){
                    $('.profile-preview .pfp').attr('src', '/storage/'+ user.image);
                }else{
                    $('.profile-preview .pfp').attr('src', '/images/default-user-img.png');
                }
                $('.profile-preview .name').text("Name: " + user.fname + ' ' + user.lname);
                $('.profile-preview .enroll').text("Enrollment id: " + user.roll);
                $('.profile-preview .about').text(user.bio);
                $('.profile-preview .username').text("@"+ user.username);
            },
            error: function (error) {
                $('.alert-body').fadeIn(500);
            }
        })
    });

    $('#close-profile').click(function () {
        $('.profile-preview').fadeOut(250);
    });
})