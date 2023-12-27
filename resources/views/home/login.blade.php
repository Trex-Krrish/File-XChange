<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - File XChange</title>
    <link rel="stylesheet" href="{{ asset('css/login-signup-modal.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>

<body>
    <div class="bg"></div>
    <div class="main-container">
        <div class="modal-content login-modal">

            <h3>Login to your File X account</h3>
            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                @method('POST')
                <br>
                @error('roll')
                    <span class="error">
                        <b>{{ $message }} </b>
                    </span>
                @enderror
                @error('password')
                    <span class="error">
                        <b>{{ $message }} </b>
                    </span>
                @enderror
                <input type="text" name="roll" placeholder="Enrollment Number" id="roll">
                <span class="pass-input">
                    <input type="password" name="password" placeholder="Password" id="pass" autocomplete="off">
                    <!-- <i class="fa-light fa-eye" id="eye-pass" onclick="togglePasswordVisibility('pass')"></i> -->
                    <i class="fal fa-eye" id="login-eye-pass"
                        onclick="togglePasswordVisibility('pass', 'login-eye-pass')"></i>
                </span>
                <br>
                <button type="submit" class="btn">Login</button>
            </form>

            <span class="other-option">
                <p>New to File X?</p> <a href="/register" data-modal="signup">Signup</a>
            </span>
        </div>
    </div>
    <script src="{{ asset('js/login-signup.js') }}"></script>
</body>

</html>
