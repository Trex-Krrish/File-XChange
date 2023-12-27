@auth
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <div class="navbar-container">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="File XChnage's logo" class="logo">
        </div>
        <div class="nav-more">
            <div class="user-main" id="show-dropdown">
                <span class="user-img">
                    @if (Auth::user()->image === 'default.jpg')
                        <img src="{{ asset('images/default-user-img.png') }}" alt="Image of  ">
                    @else
                        <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="">
                    @endif
                    <i class="fas fa-chevron-down arrow"></i>
                </span>
            </div>
        </div>
        <div class="dropdown-content">
            <nav>
                <ul>
                    <a href="{{ route('home') }}">
                        <li data-location="index" class="anchor-btns"><i class="fas fa-house"></i> Home</li>
                    </a>
                    <a href="{{ route('profile') }}">
                        <li data-location="profile" class="anchor-btns"><i class="fas fa-user"></i> Profile</li>
                    </a>
                    @if (Auth::user()->editor == '1')
                        <a href="{{ route('manage.files') }}">
                            <li data-location="favorites" class="anchor-btns"><i class="fas fa-file"></i> Manage Fles</li>
                        </a>
                    @endif

                    <a href="{{ route('favorite') }}">
                        <li data-location="favorites" class="anchor-btns"><i class="fas fa-star"></i> Favorites</li>
                    </a>
                    <a href="{{ route('about') }}">
                        <li data-location="about" class="anchor-btns"><i class="fa-solid fa-circle-info"></i> About us</li>
                    </a>
                    <a href="{{ route('how.to.use') }}" target="_blank">
                        <li data-location="how-to" class="anchor-btns"><i class="fa-sharp fa-solid fa-circle-question"></i>
                            How to use</li>
                    </a>
                    <hr>
                    {{-- <form action="/logout" method="POST">
                        @csrf
                        @method('post') --}}
                    <a href="/logout">
                        <li type="button" id="logoutButton"><i class="fas fa-arrow-right-from-bracket"></i> Logout</li>
                    </a>
                    {{-- </form> --}}
                </ul>
            </nav>
        </div>
    </div>
@else
    <div class="nav-container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <div class="login-signup-container">
            <a href="/login"><button class="login-btn btn-animate" id="loginButton">Login</button></a>
            <a href="/register"><button class="signup-btn btn-animate" id="signupButton">Signup</button></a>
        </div>
    </div>
@endauth
<script>
    $(document).ready(function() {
        $('#show-dropdown').click(function() {
            $('.dropdown-content').addClass('active');
        });
    });
</script>
<script src="{{ asset('js/navbar.js') }}"></script>
