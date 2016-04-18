var frmPassword2 = document.getElementById("password2"), tbxUsername = document.getElementById("username"), frmPassword = document.getElementById("password"), frmPassword2 = document.getElementById("password2"), frmFirstName = document.getElementById("firstName"), frmLastName = document.getElementById("lastName"), frmEmail = document.getElementById("email");
frmPassword2.addEventListener('input', checkPasswordsMatch, false);
tbxUsername.addEventListener('blur', checkNotNullUsername, false);
frmPassword.addEventListener('blur', checkNotNullPassword, false);
frmPassword2.addEventListener('blur', checkNotNullPassword2, false);
frmFirstName.addEventListener('blur', checkNotNullFirstName, false);
frmLastName.addEventListener('blur', checkNotNullLastName, false);
frmEmail.addEventListener('blur', checkNotNullEmail, false);
