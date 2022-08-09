<?php
// Print_r function for error print
function Var_Print_r($errorString)
{
    echo '<pre>';
    print_r($errorString);
    echo '</pre>';
}
// Show js message
function Js_Message($message)
{
    echo ("<script> window.alert('$message'); </script>");
}
// create login history
function set_login_history()
{
    include "connectdb.php";
    // set time zone
    date_default_timezone_set('Asia/Tehran');
    // login detail
    $login_time = date("G:i:s");
    $login_date = date("Y-m-d");
    $login_ip = $_SERVER['REMOTE_ADDR'];
    $login_detail = $_SERVER['HTTP_USER_AGENT'];
    // set in database
    $query = "INSERT INTO mypass_login_history (id, time, date, ip, detail) VALUES (NULL, '$login_time', '$login_date', '$login_ip', '$login_detail')";
    mysqli_query($MyPassdbConnection, $query);
}
// Check user sesstion
function Check_User_session()
{
    if (!isset($_SESSION['user_status'])) {
        include "files_directory.php";
        header("Location: $dir_login");
    }
}
