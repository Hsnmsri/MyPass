<?php
// change_field="username","password" | username | new_username | password | newpasswrod
if ($_POST['change_field'] == 'username') {
    include "connectdb.php";
    $dbUsername = mysqli_fetch_all(mysqli_query($MyPassdbConnection, "SELECT u_name FROM mypass_admin WHERE id = 1"));
    if ($_POST['username'] == $dbUsername[0][0]) {
        $n_username = $_POST['new_username'];
        mysqli_query($MyPassdbConnection, "UPDATE mypass_admin SET u_name = '$n_username' WHERE mypass_admin.id = 1");
        echo 'u_true';
    } else {
        echo 'u_false';
    }
} else if ($_POST['change_field'] == 'password') {
    include "connectdb.php";
    $dbPassword = mysqli_fetch_all(mysqli_query($MyPassdbConnection, "SELECT u_password FROM mypass_admin WHERE id = 1"));
    if ($_POST['password'] == $dbPassword[0][0]) {
        $n_password = $_POST['new_password'];
        mysqli_query($MyPassdbConnection, "UPDATE mypass_admin SET u_password = '$n_password' WHERE mypass_admin.id = 1");
        echo 'p_true';
    } else {
        echo 'p_false';
    }
} else {
    echo 'input_error';
}
