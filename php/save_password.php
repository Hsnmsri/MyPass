<?php
$domain_name = $_POST['domain_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
if (!empty($domain_name) && !empty($user_name) && !empty($password)) {
    include "connectdb.php";
    mysqli_query($MyPassdbConnection, "INSERT INTO mypass_passlist (id, domain, username, password) VALUES (NULL, '$domain_name', '$user_name', '$password')");
    include "functions.php";
    echo (true);
} else {
    echo (false);
}
