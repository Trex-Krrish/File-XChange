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