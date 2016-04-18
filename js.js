var count = 0;
var checkPasswordsMatch = function () {
	var frmPassword1 = document.getElementById("password"), frmPassword2 = document.getElementById("password2"), tbxPassword = document.getElementById("passwordText");
	if (password.value == null){
		tbxPassword.innerText = "";
	}
	if (password.value != password2.value){
		tbxPassword.innerText = "Passwords do not match. \n please try again";
	} else {
		tbxPassword.innerText = "";
	}
}
var checkNotNullUsername = function () {
	var tbxUserName = document.getElementById("username"), txtUsername = document.getElementById("usernameText"), btnSubmit = document.getElementById("submit");
	if (tbxUserName.value == ""){
		txtUsername.innerText = "You must enter a username";
		btnSubmit.disabled = true;
	} else {
		btnSubmit.disabled = false;
		txtUsername.innerText = "";
	}
}
var checkNotNullPassword = function () {
	var tbxPassword = document.getElementById("password"), txtPassword = document.getElementById("passwordText"), btnSubmit = document.getElementById("submit");
	if (tbxPassword.value == ""){
		txtPassword.innerText = "You must enter a Password";
		btnSubmit.disabled = true;
	} else {
		btnSubmit.disabled = false;
		txtPassword.innerText = "";
	}
}
var checkNotNullPassword2 = function () {
	var tbxPassword2 = document.getElementById("password2"), txtPassword2 = document.getElementById("passwordText2"), btnSubmit = document.getElementById("submit");
	if (tbxPassword2.value == ""){
		txtPassword2.innerText = "You must re enter your password";
		btnSubmit.disabled = true;
	} else {
		btnSubmit.disabled = false;
		txtPassword2.innerText = "";
	}
}
var checkNotNullFirstName = function () {
	var tbxFirstName = document.getElementById("firstName"), txtFirstName = document.getElementById("firstNameText"), btnSubmit = document.getElementById("submit");
	if (tbxFirstName.value == ""){
		txtFirstName.innerText = "You must enter your first name";
		btnSubmit.disabled = true;
	} else {
		btnSubmit.disabled = false;
		txtFirstName.innerText = "";
	}
}
var checkNotNullLastName = function () {
	var tbxLastName = document.getElementById("lastName"), txtLastName = document.getElementById("lastNameText"), btnSubmit = document.getElementById("submit");
	if (tbxLastName.value == ""){
		txtLastName.innerText = "You must enter your last name";
		btnSubmit.disabled = true;
	} else {
		btnSubmit.disabled = false;
		txtLastName.innerText = "";
	}
}
var checkNotNullEmail = function () {
	var tbxEmail = document.getElementById("email"), txtEmail = document.getElementById("emailText"), btnSubmit = document.getElementById("submit");
	if (tbxEmail.value == ""){
		txtEmail.innerText = "You must enter your email address";
		btnSubmit.disabled = true;
	} else {
		btnSubmit.disabled = false;
		txtEmail.innerText = "";
	}
}