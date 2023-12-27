<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | File Xchange</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    @include('components.navbar')

    <div class="main-container">
        @include('alert')
        <div class="profile-edit">

            <h2>Profile</h2>

            <div class="profile">
                <div class="pfp-container">
                    @if ($user->image == 'default.jpg')
                        <img src="{{ asset('images/default-user-img.png') }}" alt="" class="pfp">
                    @else
                        <img src="{{ asset('storage/' . $user->image) }}" alt="" class="pfp">
                    @endif
                </div>
                <i class="fa-duotone fa-pen"></i>
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Modal that allows user to change or delete img -->
            <div class="pfp-actions-container">
                <div class="pfp-actions">
                    <form action="{{ route('change.image') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <i class="fa-solid fa-xmark" title="Close"></i>
                        <label for="images" class="drop-container" id="dropcontainer">
                            <div class="choose-form">
                                <input name="image" type="file" id="images" required>
                                <button class="upload-btn" type="submit" name="change_image">Save Image</button>
                            </div>
                        </label>
                    </form>
                    <form action="{{ route('delete.image') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="delete_image" class="dlt-btn">Delete image</button>
                    </form>
                </div>
            </div>

            <div class="other-fields">

                <div class="name">
                    <span>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" value="{{ $user->fname }}" disabled class="disabled">
                    </span>
                    <span>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" value="{{ $user->lname }}" disabled class="disabled">
                    </span>
                </div>
                <form action="{{ route('change.username') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="username field-flex">
                        <span>
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" value="{{ $user->username }}">
                            @error('username')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </span>
                        <button type="submit">Change username</button>
                    </div>
                </form>

                <form action="{{ route('change.bio') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="about field-flex">
                        <span>
                            <label for="about">Describe yourself</label>
                            <input value="{{ $user->bio }}" id="bio" type="text" name="bio"
                                maxlength="100">
                        </span>
                        <button>Save</button>
                    </div>
                </form>

                <div class="enroll">
                    <label for="enroll">Enrollment No.</label>
                    <input type="text" name="enroll" value="{{ $user->roll }}" disabled class="disabled">
                </div>

                <div class="email">
                    <span>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" disabled>
                    </span>
                </div>

                <br>

                <h2>Change Password</h2>

                <form action="{{ route('change.password') }}" method="POST" class="pass-form">
                    @csrf
                    @method('PUT')
                    <span>
                        <label for="oldpass" class="required">Current password</label>
                        <input type="password" name="current_password">
                        @error('current_password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </span>

                    <span>
                        <label for="new" class="required">New password</label>
                        <input type="password" name="new_password">
                        @error('new_password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </span>

                    <span>
                        <label for="re-newpass" class="required">Repeat new password</label>
                        <input type="password" name="new_password_confirmation">
                        @error('new_password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </span>

                    <div class="pass-actions" class="required">
                        <button type="submit" class="save-pass-btn">Save password</button>
                        <!-- Cancel button works as reset button -->
                        <button class="cancel-pass-btn" type="reset">Cancel</button>
                    </div>
                </form>

            </div>

        </div>

        <div class="profile-preview">

            <h2>Profile preview</h2>

            <div class="profile-card">

                <div class="pfp-container">
                    @if ($user->image == 'default.jpg')
                        <img src="{{ asset('images/default-user-img.png') }}" alt="" class="pfp">
                    @else
                        <img src="{{ asset('storage/' . $user->image) }}" alt="" class="pfp">
                    @endif
                </div>

                <h4 id="previewUsername" class="username"></h4>

                <p id="previewBio" class="about"></p>

                <h3 class="name">Name: {{ $user->fname . ' ' . $user->lname }}</h3>
                <h3 class="enroll">Enrollment id: {{ $user->roll }}</h3>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#show-dropdown").click(function() {
                $(".dropdown-content").toggle();
            });
        });
    </script>
</body>

</html>
