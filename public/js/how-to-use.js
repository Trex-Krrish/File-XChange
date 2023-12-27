$(document).ready(function () {
    $(window).on("load", function () {
        $('.loading-container').fadeOut(500, function () {
            $(this).remove();
        });
    })
    
        function handleIntersection(entries, observer) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate'); // Add a CSS class for animation
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }

        // Create an Intersection Observer
        const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });

        // Select all elements with class 'img-container' and observe each one
        document.querySelectorAll('.img-container').forEach((imgContainer) => {
            observer.observe(imgContainer);
        });

    
});