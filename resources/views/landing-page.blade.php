<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started | File X</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
    <link rel="icon" href="{{ asset('images/filex-icon.png') }}">
</head>

<body>

    <div class="container">

        <section class="main-section">

            <div class="navbar">
                <a href="{{ route('login') }}"><button>Login</button></a>
                <a href="{{ route('register') }}"><button>Signup</button></a>
            </div>

            <div class="logo-main">
                <img src="{{ asset('images/landing-page-assets/filex-primary-color.png') }}" alt="logo">
                <h1 class="heading">The smarter way to share files</h1>
            </div>

            <div class="contents-container">
                <div class="content1">
                    <span class="sub-head">
                        <h1>Anytime, Anywhere Access:</h1>
                        <h2>Access your files from any device, wherever you are, whenever you need them.</h2>
                    </span>
                    <img class="vect" src="{{ asset('images/landing-page-assets/filex-vector.svg') }} "
                        alt="">
                </div>

            </div>
            <span class="more"><a href="#what-is-filexchange">More<i
                        class="fa-regular fa-chevron-down"></i></a></span>
        </section>

        <section id="what-is-filexchange">
            <div class="contents">
                <h1>What is File XChange</h1>
                <p class="para">
                    File XChange is a dynamic platform designed exclusively for students to seamlessly share and access
                    study materials. Whether it's lecture notes, study guides, or helpful resources, File XChange brings
                    students together in a collaborative learning environment.
                </p>
                <span class="more"><a href="#how-it-works">More<i class="fa-regular fa-chevron-down"></i></a></span>
            </div>

            <div class="design"></div>
        </section>

        <section id="how-it-works">

            <div class="design"></div>

            <div class="contents">
                <h1>How File XChange Works</h1>
                <h2>Getting started with File Xchange is simple:</h2>

                <ul>
                    <li><i class="fa-regular fa-arrow-right-to-bracket"></i>Sign up for free and create your profile
                    </li>
                    <li><i class="fa-regular fa-upload"></i>Upload your study materials or explore resources shared by
                        others</li>
                    <li><i class="fa-regular fa-download"></i>Download, favorite, and organize materials based on your
                        preferences</li>
                    <li><i class="fa-regular fa-users"></i>Engage with a community of like-minded students, fostering
                        collaborative learning</li>
                </ul>
                <span class="more"><a href="#features">More<i class="fa-regular fa-chevron-down"></i></a></span>
            </div>

        </section>

        <section id="features">

            <div class="contents">
                <h1>Features of FIle XChange</h1>
                <ul>
                    <span class="row">
                        <li>Easy Note Sharing
                            <img class="media"
                                src="{{ asset('images/landing-page-assets/file-sharing-animation.gif') }}"
                                alt="Animation">
                        </li>
                        <li>
                            Effortless Download
                            <img class="media"
                                src=" {{ asset('images/landing-page-assets/download-animation.gif') }} "></img>
                        </li>
                    </span>
                    <span class="row">
                        <li class="fav">
                            Add to Favorites
                            <img class="media"
                                src=" {{ asset('images/landing-page-assets/favorite-animation.gif') }} "></img>
                        </li>
                        <li>
                            Community Engagement
                            <img class="media"
                                src=" {{ asset('images/landing-page-assets/community-animation.gif') }} "></img>
                        </li>
                    </span>
                </ul>
            </div>
            <span class="more"><a href="#testimonials">More<i class="fa-regular fa-chevron-down"></i></a></span>

        </section>

        <section id="testimonials">


            <div class="contents">
                <h1>Testimonials <sup><i class="fa-sharp fa-solid fa-stars"></i></sup></h1>
                <div class="card-container">

                    <div class="card">
                        <i class="fa-solid fa-quote-left"></i>
                        <div class="line"></div>
                        <div class="feedback-container">
                            <h4 class="text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                                ullam!"
                            </h4>
                            <div class="person-container">
                                <p class="person">~ Lorem Ipsum</p>
                                <p class="designation">Director of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-quote-left"></i>
                        <div class="line"></div>
                        <div class="feedback-container">
                            <h4 class="text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                                ullam!"
                            </h4>
                            <div class="person-container">
                                <p class="person">~ Lorem Ipsum</p>
                                <p class="designation">Director of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-quote-left"></i>
                        <div class="line"></div>
                        <div class="feedback-container">
                            <h4 class="text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                                ullam!"
                            </h4>
                            <div class="person-container">
                                <p class="person">~ Lorem Ipsum</p>
                                <p class="designation">Director of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-quote-left"></i>
                        <div class="line"></div>
                        <div class="feedback-container">
                            <h4 class="text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                                ullam!"
                            </h4>
                            <div class="person-container">
                                <p class="person">~ Lorem Ipsum</p>
                                <p class="designation">Director of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="student-feedbacks">
            <div class="contents">
                <h1>Student Feedbacks <sup><i class="fa-solid fa-comments"></i></sup></h1>
                <div class="message">
                    <h2>Help Us Build a Community of Voices</h2>
                    <h3>We do not have enough feedbacks to show you right now <br> Please Signup and share your thoughts
                    </h3>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>4 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>5 Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi mollitia laborum
                                    sapiente perferendis minima fugiat sequi soluta sunt veritatis ea! Lorem ipsum dolor
                                    sit amet consectetur adipisicing elit. Maxime architecto unde fugiat, odio rem fuga
                                    in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>6 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>7 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="top">
                                <span class="name-and-stars">
                                    <h4 class="name">Lorem Ipsum</h4>
                                    <span class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </span>
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                            <div class="text">
                                <p>8 Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime architecto unde
                                    fugiat, odio rem fuga in culpa quos nihil neque lorem Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Necessitatibus, sunt</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="call-btn">
            <h1>Join the community today!</h1>
            <a href="{{ route('register') }}"><button>Sign Up for Free</button></a>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            // Swips automatic
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            autoplayHoverPause: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // Coverflow effect
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>
