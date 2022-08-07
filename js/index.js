// Add password function
function ShowInputsPassword() {
    let domainLabel, domainInput, usernameLabel, usernameInput, saveButton, cancelButton;
    domainLabel = document.getElementById('domain-label');
    domainInput = document.getElementById('domain-input');
    usernameLabel = document.getElementById('username-label');
    usernameInput = document.getElementById('username-input');
    saveButton = document.getElementById('save-button');
    cancelButton = document.getElementById('cancel-button');
    domainLabel.style.removeProperty('display');
    domainInput.style.removeProperty('display');
    usernameLabel.style.removeProperty('display');
    usernameInput.style.removeProperty('display');
    saveButton.style.removeProperty('display');
    cancelButton.style.removeProperty('display');
}
// Cancel / Hide Inputs password function
function HideInputsPassword() {
    let domainLabel, domainInput, passwordInput, usernameLabel, usernameInput, saveButton, cancelButton;
    domainLabel = document.getElementById('domain-label');
    domainInput = document.getElementById('domain-input');
    usernameLabel = document.getElementById('username-label');
    usernameInput = document.getElementById('username-input');
    passwordInput = document.getElementById('pass-in');
    saveButton = document.getElementById('save-button');
    cancelButton = document.getElementById('cancel-button');
    domainLabel.style.display = 'none';
    domainInput.style.display = 'none';
    domainInput.value = null;
    usernameLabel.style.display = 'none';
    usernameInput.style.display = 'none';
    usernameInput.value = null;
    saveButton.style.display = 'none';
    cancelButton.style.display = 'none';
    passwordInput.value = null;
}
// Save Password
function SavePassword() {
    let domainInput, usernameInput, passwordInput;
    domainInput = document.getElementById('domain-input');
    usernameInput = document.getElementById('username-input');
    passwordInput = document.getElementById('pass-in');
    if ((domainInput.value != null) && (usernameInput.value != null) && (passwordInput.value != null)) {
        let xhttpReq = new XMLHttpRequest();
        xhttpReq.onload = function () {
            window.alert(this.responseText ? 'Your password has been saved successfully' : 'Error! "Invalid input"')
        }
        xhttpReq.open("POST", "./php/save_password.php");
        xhttpReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttpReq.send("domain_name=" + domainInput.value + "&user_name=" + usernameInput.value + "&password=" + passwordInput.value);
        HideInputsPassword();
    } else {
        window.alert('Invalid input!');
    }
}