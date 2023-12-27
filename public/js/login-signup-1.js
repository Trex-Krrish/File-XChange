// Show-Hide password
document.getElementById('eye-password').addEventListener('click', togglePasswordVisibility.bind(null, 'password-input', 'eye-password'));
document.getElementById('eye-re-password').addEventListener('click', togglePasswordVisibility.bind(null, 're-password-input', 'eye-re-password'));

function togglePasswordVisibility(inputId, eyeIconId) {
  const passwordInput = document.getElementById(inputId);
  const eyeIcon = document.getElementById(eyeIconId);

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    eyeIcon.classList.remove('fa-eye');
    eyeIcon.classList.add('fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    eyeIcon.classList.remove('fa-eye-slash');
    eyeIcon.classList.add('fa-eye');
  }
}

