$(document).ready(function () {
    $(".more-actions").click(function () {
        $(".add-options").not($(this).children(".add-options")).hide();
        $(this).children(".add-options").toggle();
    });

    const pdfPreviews = document.querySelectorAll('.file-thumbnail-container');

    pdfPreviews.forEach(preview => {
        const pdfFileName = preview.getAttribute('data-pdf');
        const pdfUrl = pdfFileName;

        const canvas = document.createElement('canvas');
        preview.appendChild(canvas);

        async function loadPDF(url) {
            const pdf = await pdfjsLib.getDocument(url).promise;
            const page = await pdf.getPage(1);

            const viewport = page.getViewport({
                scale: 0.5
            });
            canvas.width = 350;
            canvas.height = 300;

            const context = canvas.getContext('2d');
            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };

            await page.render(renderContext);
        }

        loadPDF(pdfUrl).catch(error => {
            console.error(`Error loading PDF ${pdfFileName}:`, error);
        });

    });

    $(".comment-btn").click(function () {
        let file_id = $(this).data('file-id');
        window.location.href = "/comments/" + file_id;
    });
    // $('.alert-body').hide();
    $(".toggle-alert-for-login").click(function () {
        $('.alert-body').fadeIn(500);
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $('.download-btn').click(function () {
        $.ajax({
            url: '/increment-download',
            type: 'POST',
        });
    });
});