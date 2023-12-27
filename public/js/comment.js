$(document).ready(function () {
    $(".close-icon").click(function () {
        $('.alert-body').fadeOut();
    });

    $('.delete').click(function () {
        let file_id = $(this).data('file-id');
        let comment_id = $(this).data('comment-id');
        
        $.ajax({
            url: '/comments/delete',
            type: 'delete',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            data: {
                file_id: file_id,
                comment_id: comment_id
            },
            success: function (data) {
                window.location.reload();
            },
            error: function (err) {
                window.location.reload();
            },
        });
    });
});