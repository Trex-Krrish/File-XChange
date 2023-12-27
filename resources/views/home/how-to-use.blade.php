<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Use | File XChange</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/how-to-use.css') }}">
    <link rel="icon" href="{{ asset('images/filex-icon.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="loading-container">
        <img src="{{ asset('images/filex-icon.png') }}" class="icon">
    </div>
    <div class="main-container">

        <div class="side-bar">
            <ol>
                <li><a href="#create-account">How to create an File X Account</a></li>
                <li><a href="#add-favorite">How to add favorite</a></li>
                <li><a href="#comment">How to post a comment</a></li>
                <li><a href="#upload-files">How to Upload files</a></li>
                <li><a href="#profile">Updating profile</a></li>
                <ul class="sublist">
                    <li><a href="#change-pfp">How to change profile photo</a></li>
                    <li><a href="#change-uname">How to change your username</a></li>
                    <li><a href="#change-pass">How to change password</a></li>
                </ul>
            </ol>
        </div>

        <div class="contents">


            <sction id="create-account">

                <h3 class="title">How to create an FileX account</h3>

                <p class="ht-para"><b>Step 1:</b> Click on the <b>signup</b> button on the top
                    right corner.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/signup-arrow.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 2:</b> Provide Your Information:</p>
                <ol class="list">
                    <li>First name</li>
                    <li>Last name</li>
                    <li><b>Username:</b> Choose a unique username for your account.</li>
                    <li><b>Enrollment No:</b> A unique enrollment number will be given to you by the Parul University.
                    </li>
                    <li><b>Email Address:</b> Enter a valid email address that you have access to.</li>
                    <li><b>Password:</b> Create a secure password. We recommend using a combination of letters, numbers,
                        and
                        special characters for added security.</li>
                    <li><b>Confirm password:</b> Write same as your password.</li>
                </ol>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/signup.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 3:</b> After Completing registration, please login by clicking on the
                    <b>login</b> button at the top
                    right corner.
                </p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/login-arrow.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 4:</b> Login with your registered <b>enrollment number</b> and
                    <b>password</b>.
                </p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/login.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Important Notes:</b></p>
                <ul class="list">
                    <li>Make sure to choose a unique username that hasn't been used by others on our website.</li>
                    <li>Keep your password secure and do not share it with anyone. We will never ask you for your
                        password via email or other means.</li>
                    <li>Ensure that the email address you provide during registration is accurate, as it will be used
                        for account-related notifications and password recovery.</li>
                    <!-- <li>If you encounter any issues during the registration process or have questions, feel free to contact our support team at support@your-file-sharing-website.com.</li> -->
                </ul>

            </sction>

            <hr>

            <sction id="add-favorite">

                <h3 class="title">How to add Favorite</h3>

                <p class="ht-para"><b>Step 1:</b> Log in with a FileX account</p>

                <p class="ht-para"><b>Step 2:</b> Choose a file you want to add to favorite
                    and then click on the { <i class="fa-regular fa-ellipsis-vertical"></i> } to open
                    the dropdown menu.</p>

                <p class="ht-para"><b>Step 3:</b> Click on the <b>Add to favorites</b> button.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/file-option-fav.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 4:</b> Access your Favorites files by clicking on your
                    Profile Picture on the top right corner.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/navbar-fav.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 5:</b> Click on the <b>Favorite</b> button in the dropdown menu, you will be
                    redirected to the favorite page where you can your favorite files.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/favorite-file-options.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Important Notes:</b></p>
                <ul class="list">
                    <li>Only logged-in users can add files to their favorites. Make sure you're logged in before
                        attempting to add files.</li>
                    <li>You can remove files from your favorites list at any time by selecting the files and clicking on
                        the "Remove from Favorites" option.</li>
                    <li>Your favorites list is private and can only be viewed by you. Other users cannot see your
                        favorite files.</li>
                </ul>

            </sction>

            <hr>

            <section id="comment">

                <h3 class="title">How to post a Comment</h3>

                <p class="ht-para"><b>Step 1:</b> Log in with a FileX account</p>

                <p class="ht-para"><b>Step 2:</b> Choose a file you want to add/ view comments</p>

                <p class="ht-para"><b>Step 3:</b> Click on the { <i class="fa-regular fa-ellipsis-vertical"></i> } to
                    open a dropdown menu.</p>

                <p class="ht-para"><b>Step 4:</b> Click on the <b>Comments</b> button, then you will
                    be redirected to the Comment page of the respective file</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/file-option-comment.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 5:</b> To add a comment, write your comment on
                    text box and then click the arrow button to add a
                    comment to the file.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/comments.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 6:</b> To Delete a comment, click on the delete
                    icon on your comment.</p>

                <p class="ht-para"><b>Important Notes:</b></p>

                <ul class="list">
                    <li>Comments should be respectful and related to the file's content. Inappropriate or offensive
                        comments may be removed by moderators.</li>
                    <li>If you change your mind, you can delete your own comments.</li>
                    <li>Comments are public and visible to other users who have access to the file. Make sure your
                        comments are appropriate for a wider audience.</li>
                    <li>Uploader of the file can delete any comment.</li>
                    <li>Only one comment can be add by the user on each file, and maximum 100 characters are allowed in
                        a comment.</li>
                </ul>

            </section>

            <hr>

            <section id="upload-files">

                <h3 class="title">How to Upload files</h3>

                <p class="ht-para"><b>Step 1:</b> Log in with a FileX account</p>

                <p class="ht-para"><b>Step 2:</b> Click on your profile picture then you have
                    to click on the 'Manage file' button.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/navbar-manage-file.png')}}" alt="">
                </div>

                <p class="ht-para">After clicking on the manage file button you
                    will be redirected to this page.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/manage-files.png')}}" alt="">
                </div>

                <p class="ht-para"><b>Step 3:</b> Click on the <b>Upload</b> button.</p>

                <div class="img-container ht-img-container">
                    <img src="{{asset('images/how-to-images/upload-files.png')}}" alt="">
                </div>

                <p class="ht-para">A form will be open to upload your file. Follow the below
                    steps to upload your file in FileX.</p>

                <p class="ht-para"><b>Step 4:</b> Provide the information of the file:</p>

                <ul class="list">
                    <li>Upload your file</li>
                    <li><b>Title:</b> Provide a descriptive title for your file.</li>
                    <li><b>Description:</b> Add a brief description or additional information about the file.</li>
                    <li><b>Semester:</b> Select the semester or academic term relevant to the file.</li>
                    <li><b>Subject:</b> Mention name of the subject respected to your uploaded file</li>
                </ul>

                <p class="ht-para"><b>Step 5:</b> Click on the <b>Upload File</b> button.</p>

                <p class="ht-para"><b>Important Notes:</b></p>

                <ul class="list">
                    <li>The additional information provided, such as title, description, semester, and subject, helps
                        categorize and provide context for your files.</li>
                    <li><b>Permission to upload a file is not given to all the students.
                            Only few students will have access to the file upload system.</b></li>
                    <li>The size of the uploaded file should be less than 50mb.</li>
                </ul>

            </section>

            <hr>

            <section id="profile">

                <h3 class="title">Updating Profile</h3>

                <div class="change-pfp" id="change-pfp">

                    <h3 class="sub-title">How to change profile photo</h3>

                    <p class="ht-para"><b>Step 1:</b> Log in with a FileX account</p>

                    <p class="ht-para"><b>Step 2:</b> Click no your profile at the top right corner, after clicking a
                        dropdown will appear then click the <b>Profile</b> button.</p>

                    <div class="img-container ht-img-container">
                        <img src="{{asset('images/how-to-images/navbar-profile.png')}}" alt="">
                    </div>

                    <p class="ht-para"><b>Step 3:</b> Click on the { <i class="fa-duotone fa-pen"></i> }, a new popup
                        will open. </p>

                    <div class="img-container ht-img-container">
                        <img src="{{asset('images/how-to-images/profile-pen.png')}}" alt="">
                    </div>

                    <p class="ht-para"><b>Step 4:</b> Click on the <b>Change profile</b> button, then select a image
                        file you want to display in your profile photo. </p>

                    <div class="img-container ht-img-container">
                        <img src="{{asset('images/how-to-images/change-pfp.png')}}" alt="">
                    </div>

                    <p class="ht-para"> If you want to delete the profile photo and set to the default one then follow
                        the below steps: </p>

                    <p class="ht-para"><b>Step 1:</b> Log in with a FileX account</p>

                    <p class="ht-para"><b>Step 2:</b> Click on the { <i class="fa-duotone fa-pen"></i> }, a new popup
                        will open. </p>

                    <p class="ht-para"><b>Step 3:</b> Click on the <b>Delete photo</b> button, then your profile photo
                        will be deleted.</p>

                    <p class="ht-para"><b>Important Notes:</b></p>

                    <ul class="list">
                        <li>Ensure that the new profile photo represents you accurately and is appropriate for a wider
                            audience.</li>
                        <li>Changes to your profile photo are typically public and visible to other users. Be mindful of
                            the image you choose.</li>
                    </ul>

                </div>

                <hr>

                <div id="change-uname" class="change-uname">

                    <h3 class="sub-title">How to change your Username</h3>

                    <p class="ht-para"><b>Step 1:</b> There is a field named as <b>Username</b> and it will show you
                        your current username, now rewrite the username as you want to update. </p>

                    <div class="img-container ht-img-container">
                        <img src="{{asset('images/how-to-images/profile-uname.png')}}" alt="">
                    </div>

                    <p class="ht-para"><b>Step 2:</b> After rewriting the username click on the username click on the
                        <b>Change username</b> button.
                    </p>

                    <p class="ht-para"><b>Important Notes:</b></p>

                    <ul class="list">
                        <li>Username changes are subject to availability. If your desired username is already in use by
                            another user, you may need to choose an alternative.</li>
                        <li>Changing your username may affect your online identity and how others identify you within
                            the community. Choose a username that reflects your desired online presence.</li>
                        <li>Username changes are typically public and visible to other users. Be sure to choose a
                            username that you're comfortable sharing.</li>
                    </ul>

                </div>

                <hr>

                <div id="change-pass" class="change-pass">

                    <h3 class="sub-title">How to change Password</h3>

                    <p class="ht-para"><b>Step 1:</b>Click on the <b>Change passwords</b> button on the bottom of the
                        profile page, a popup will appear. </p>

                    <div class="img-container ht-img-container">
                        <img src="{{asset('images/how-to-images/profile-pass.png')}}" alt="">
                    </div>

                    <p class="ht-para"><b>Step 2:</b> Enter your old/current password</p>

                    <p class="ht-para"><b>Step 3:</b> Enter your New password</p>

                    <p class="ht-para"><b>Step 4:</b> Confirm your new password</p>

                    <p class="ht-para"><b>Important Notes:</b></p>

                    <ul class="list">
                        <li>Choose a strong and unique password that is difficult for others to guess. Avoid using
                            easily accessible information such as birthdays or common words.</li>
                        <li>Keep your new password confidential and do not share it with anyone. Legitimate
                            organizations will never ask for your password.</li>
                        <li>Changing your password regularly can help protect your account from unauthorized access.
                        </li>
                    </ul>

                </div>

            </section>

        </div>

    </div>
    <script src="{{ asset('js/how-to-use.js') }}"></script>
</body>

</html>
