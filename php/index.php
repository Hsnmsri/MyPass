<?php
include "files_directory.php";
include "functions.php";
session_start();
Check_User_session();
// logout
if (isset($_GET['user']) && $_GET['user'] == 'logout') {
    setcookie(session_name(), session_id(), time() - 1);
    session_unset();
    session_destroy();
    header("Location: $dir_login");
}