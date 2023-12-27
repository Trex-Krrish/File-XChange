<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | File XChange</title>
    <link rel="stylesheet" href="{{ asset('css/login-signup-modal.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
</head>

<body>

    <div class="bg"></div>

    <div class="main-container">
        <div class="modal-content login-modal">

            <h3>Admin Login Panel - File XChange</h3>
            <form action="{{ route('admin.authenticate') }}" method="post">
                @csrf
                @method('POST')
                <br>
                @error('username' || 'password')
                    <span class="error">
                        <b> {{ $message }} </b>
                    </span>
                @enderror

                <input type="text" name="username" placeholder="username" id="username">

                <span class="pass-input">
                    <input type="password" name="password" placeholder="Password" id="pass" autocomplete="off">
                    <!-- <i class="fa-light fa-eye" id="eye-pass" onclick="togglePasswordVisibility('pass')"></i> -->
                    <i class="fal fa-eye" id="login-eye-pass"
                        onclick="togglePasswordVisibility('pass', 'login-eye-pass')"></i>
                </span>

                <br>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(passwordFieldId, eyeIconId) {
            var passwordField = document.getElementById(passwordFieldId);
            var eyeIcon = document.getElementById(eyeIconId);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.className = "fal fa-eye-slash";
            } else {
                passwordField.type = "password";
                eyeIcon.className = "fal fa-eye";
            }
        }
    </script>

</body>

</html>
