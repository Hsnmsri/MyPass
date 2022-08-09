// Delete Password from database
function RemovePasswrod(PasswordDatabaseId) {
    let xhttpReq = new XMLHttpRequest();
    xhttpReq.onload = function () {
        window.alert(this.responseText ? 'Your password has been removed successfully' : 'Error! "Invalid input"');
        location.reload();
    }
    xhttpReq.open("POST", "./php/delete_password.php");
    xhttpReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpReq.send("pass_id=" + PasswordDatabaseId);
}