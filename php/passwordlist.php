<?php
include "php/connectdb.php";
include "php/functions.php";
Check_User_session();
$password_list_data = mysqli_query($MyPassdbConnection, "SELECT * FROM mypass_passlist");
$password_list_data_array = mysqli_fetch_all($password_list_data);