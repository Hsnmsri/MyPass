<?php include "php/setting.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>

<body>

    <h1>Setting</h1>
    <button onclick="Redirector('index.php')">Home</button>
    <button onclick="Redirector('loginhistory.php')">Login History</button>
    <button onclick="Redirector('passwordlist.php')">Password List</button>
    <button onclick="Redirector('setting.php')">Refresh</button>
    <button onclick="Redirector('index.php?user=logout')">Logout</button>

    <br><br>
    <br><br>

    <hr>
    <div>
        <h3>Change UserName</h3>
        <label>UserName : </label>
        <input type="text" id="username">
        <br><br>
        <label>New UserName : </label>
        <input type="text" id="n-username">
        <br><br>
        <label>re-type UserName : </label>
        <input type="text" id="n-retype-username">
        <br><br>
        <button onclick="Clear_Username_form()">Clear</button>
        <button onclick="Change_Username()">Change UserName</button>
        <br><br>
    </div>
    <hr>
    <div>
        <h3>Change Password</h3>
        <label>Password : </label>
        <input type="text" id="password">
        <br><br>
        <label>New Password : </label>
        <input type="text" id="n-password">
        <br><br>
        <label>re-type Password : </label>
        <input type="text" id="n-retype-password">
        <br><br>
        <button onclick="Clear_Password_form()">Clear</button>
        <button onclick="Change_Password()">Change Password</button>
        <br><br>
    </div>

    <!-- script -->
    <script src="js/functions.js"></script>
    <script src="js/setting.js"></script>

</body>

</html>