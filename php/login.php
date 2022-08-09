<?php
include "functions.php";
include "files_directory.php";
session_start();
include "connectdb.php";
$loginData = mysqli_query($MyPassdbConnection, "SELECT u_name, u_password FROM mypass_admin WHERE id = 1");
$loginArrayData = mysqli_fetch_all($loginData);
$dbUserName = $loginArrayData[0][0];
$dbPassword = $loginArrayData[0][1];
// check user-status session for exiting
if (isset($_SESSION['user_status']) && ($_SESSION['user_status'] == 1)) {
    header("Location: $dir_index");
} else {
    // Check for request
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (($_POST['username'] == $dbUserName) && ($_POST['password'] == $dbPassword)) {
            // set user-status session
            $_SESSION['user_status'] = 1;
            setcookie(session_name(), session_id(), time() + 60 * 60 * 3);
            set_login_history();
            header("Location: $dir_index");
        } else {
            Js_Message('Username or password is invalid!');
        }
    }
}
