//Clear username fields
function Clear_Username_form() {
    let usernameInput, new_usernameInput, new_retype_usernameInput;
    usernameInput = document.getElementById('username');
    new_usernameInput = document.getElementById('n-username');
    new_retype_usernameInput = document.getElementById('n-retype-username');
    usernameInput.value = null;
    new_usernameInput.value = null;
    new_retype_usernameInput.value = null;
}
//Clear password fields
function Clear_Password_form() {
    let passwordInput, new_passwordInput, new_retype_passwordInput;
    passwordInput = document.getElementById('password');
    new_passwordInput = document.getElementById('n-password');
    new_retype_passwordInput = document.getElementById('n-retype-password');
    passwordInput.value = null;
    new_passwordInput.value = null;
    new_retype_passwordInput.value = null;
}
//Change username
function Change_Username() {
    let usernameInput, new_usernameInput, new_retype_usernameInput;
    usernameInput = document.getElementById('username');
    new_usernameInput = document.getElementById('n-username');
    new_retype_usernameInput = document.getElementById('n-retype-username');
    if ((usernameInput.value !== null) && (new_usernameInput.value !== null) && (new_retype_usernameInput.value !== null)
        && (new_usernameInput.value === new_retype_usernameInput.value)) {
        let xHttpReq = new XMLHttpRequest;
        xHttpReq.onload = function () {
            if (this.responseText == 'u_true') {
                window.alert('Username change Successfully');
                Clear_Username_form();
                Redirector('index.php?user=logout');
            } else if (this.responseText == 'u_false') {
                window.alert('Username change unSuccessfully!');
            }
        }
        xHttpReq.open("POST", "./php/change_login_info.php");
        xHttpReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xHttpReq.send("change_field=username&username=" + usernameInput.value + "&new_username=" + new_usernameInput.value);
    }
}
//Change password
function Change_Password() {
    let passwordInput, new_passwordInput, new_retype_passwordInput;
    passwordInput = document.getElementById('password');
    new_passwordInput = document.getElementById('n-password');
    new_retype_passwordInput = document.getElementById('n-retype-password');
    if ((passwordInput.value !== null) && (new_passwordInput.value !== null) && (new_retype_passwordInput.value !== null)
        && (new_passwordInput.value === new_retype_passwordInput.value)) {
        let xHttpReq = new XMLHttpRequest;
        xHttpReq.onload = function () {
            if (this.responseText == 'p_true') {
                window.alert('Password change Successfully');
                Clear_Password_form();
                Redirector('index.php?user=logout');
            } else if (this.responseText == 'p_false') {
                window.alert('Password change unSuccessfully!');
            }
        }
        xHttpReq.open("POST", "./php/change_login_info.php");
        xHttpReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xHttpReq.send("change_field=password&password=" + passwordInput.value + "&new_password=" + new_passwordInput.value);
    }
}
