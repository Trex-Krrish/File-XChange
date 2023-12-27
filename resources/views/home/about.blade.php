<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | File Xchange</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="icon" href="{{ asset('images/filex-icon.png') }}">
</head>

<body>
    @auth
        @include('components.navbar')
    @endauth
    <div class="main-container">

        <h1>Meet Our Team</h1>

        <div class="team-members">

            <div class="member">
                <div class="img-container" data-aos="fade-down">
                    <img src="{{ asset('images/krrish.jpg') }}" alt="Krrish Halder">
                </div>
                <h3 class="name" data-aos="fade-right">Krrish Halder</h3>
            </div>

            <div class="member">
                <div class="img-container" data-aos="fade-down">
                    <img src="{{ asset('images/aksh.jpg') }}" alt="Aksh Patel">
                </div>
                <h3 class="name" data-aos="fade-up">Aksh Patel</h3>
            </div>


        </div>

        <hr>

        <div class="more-about">

            <div class="member-more">
                <h3 class="role">Back-End Developer</h3>

                <div class="member-details" data-aos="slide-right">
                    <div class="img-container">
                        <img src="{{ asset('images/krrish.jpg') }}" alt="">
                    </div>

                    <div class="other-info">
                        <h4 class="name">Krrish Halder</h4>
                        <span class="socials">
                            <a href="https://instagram.com/its__johan_" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="mailto:krrish.code07@gmail.com"><i class="fa-light fa-envelope"></i></a>
                            <a href="https://krrishhalder.w3spaces.com" target="_blank"><i
                                    class="fa-light fa-globe"></i></a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="member-more">
                <h3 class="role">Front-End Developer</h3>

                <div class="member-details" data-aos="slide-right">
                    <div class="img-container">
                        <img src="{{ asset('images/aksh.jpg') }}" alt="">
                    </div>

                    <div class="other-info">
                        <h4 class="name">Aksh Patel</h4>
                        <span class="socials">
                            <a href="https://instagram.com/xptlmusic" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="mailto:aksh2934@gmail.com"><i class="fa-light fa-envelope"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/navbar.js') }}"></script>

    <!-- On scroll animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        $(document).ready(function() {
            AOS.init({
                duration: 500,
                delay: 100,
            });

            $("#show-dropdown").click(function() {
                $(".dropdown-content").toggle();
            });
        });
    </script>

</body>

</html>
