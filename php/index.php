<?php
include "files_directory.php";
session_start();

// check session login set
if (!isset($_SESSION['user_status'])) {
    header("Location: $dir_login");
}

// logout
if (isset($_GET['user']) && $_GET['user'] == 'logout') {

    // unset cookie
    setcookie(session_name(), session_id(), time() - 1);

    // unset session
    session_unset();
    session_destroy();

    //redirect
    header("Location: $dir_login");
}
