var usernameValidity = false;
function usernameCheck() {

	let inputUsername = document.getElementById("input_username");
	let usernameLength = inputUsername.value.length;
	if (usernameLength >= 8) {
		document.getElementById("checklist1").style.display = 'inline';
		usernameValidity = true;
	}
	else {
		document.getElementById("checklist1").style.display = 'none';
		usernameValidity = false;
	}


}