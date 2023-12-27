<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File XChange</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>

<body>
    <footer>
        @auth
        <ul>
            <a href="{{route('home')}}">
                <li class="anchor-btns">Home</li>
            </a>
            <a href="{{route('profile')}}">
                <li class="anchor-btns">Profile</li>
            </a>
            @if (Auth::user()->editor == '1')
                <a href="{{route('manage.files')}}">
                    <li class="anchor-btns">Manage Files</li>
                </a>
            @endif
            <a href="{{route('favorite')}}">
                <li class="anchor-btns">Favorites</li>
            </a>
            <a href="{{route('about')}}">
                <li class="anchor-btns">About us</li>
            </a>
            <a href="{{route('feedback')}}">
                <li class="anchor-btns">Feedback</li>
            </a>
        </ul>
        @endauth
        <hr>

        <div class="footer-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Filexchange logo">
        </div>
        <p> &copy; 2023 File XChange</p>
    </footer>

</body>

</html>
