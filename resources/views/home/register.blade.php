<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - File XChange</title>
    <link rel="stylesheet" href="{{ asset('css/login-signup-modal.css') }}">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>

<body>

    <div class="bg"></div>

    <div class="main-container">

        <div class="modal-content">

            <h3>Create your File X account</h3>
            <form action="{{route('register')}}" method="POST">
                @csrf
                @method('POST')
                <div class="names input-flex input-field">
                    <input type="text" name="fname" placeholder="First name">
                    <input type="text" name="lname" placeholder="Last name">
                    @error('fname')
                        <span class="error name-error">{{ $message }} .</span>
                    @enderror
                    @error('lname')
                        <span class="error name-error">{{ $message }} .</span>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="username" placeholder="username" id="username">
                    @error('username')
                        <span class="error">{{ $message }} </span>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="roll" placeholder="Enrollment Number" id="roll">
                    @error('roll')
                        <span class="error">{{ $message }} </span>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="email" name="email" placeholder="Email id" id="email">
                    @error('email')
                        <span class="error">{{ $message }} </span>
                    @enderror
                </div>

                <span class="pass-input input-field">
                    <input type="password" name="password" placeholder="Password" class="password-input"
                        id="password-input">
                    <i class="fa-light fa-eye" id="eye-password"></i>
                    @error('password')
                        <span class="error pass-error">{{ $message }}</span>
                    @enderror
                </span>

                <span class="pass-input input-field">
                    <input type="password" name="password_confirmation" placeholder="Repeat Password" class="password-input"
                        id="re-password-input">
                    <i class="fa-light fa-eye" id="eye-re-password"></i>
                    @error('password_confirmation')
                        <span class="error pass-error">{{ $message }}</span>
                    @enderror
                </span>

                <br>
                <button type="submit" class="btn">Sign up</button>
            </form>

            <span class="other-option">
                <p>Already have an account?</p> <a href="{{ route('login') }}" data-modal="login">Login</a>
            </span>

        </div>

    </div>

    <script src="{{ asset('js/login-signup-1.js') }}"></script>

</body>

</html>
