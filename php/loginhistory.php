<?php
include "php/connectdb.php";
include "php/functions.php";
Check_User_session();
$login_history_data = mysqli_query($MyPassdbConnection, "SELECT * FROM mypass_login_history");
$login_history_data_array = mysqli_fetch_all($login_history_data);