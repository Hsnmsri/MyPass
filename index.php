<?php include "php/index.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPass</title>
</head>

<body>

    <h1>My Pass</h1>
    <button onclick="Redirector('setting.php')">Setting</button>
    <button onclick="Redirector('loginhistory.php')">Login History</button>
    <button  onclick="Redirector('passwordlist.php')">Password List</button>
    <button  onclick="Redirector('index.php?user=logout')">Logout</button>

    <br><br>
    <br><br>

    <label style="display: none;" id="domain-label" for="domain-input">Domain :</label>
    <input type="text" id="domain-input" style="display: none;">

    <br><br>

    <label style="display: none;" id="username-label" for="username-input">UserName :</label>
    <input type="text" style="display: none;" id="username-input">

    <br><br>
    
    <label>Password :</label>
    <input type="text" id="pass-in">

    <br><br>

    <button onclick="PasswordGenerator()">Generate</button>
    <button onclick="ShowInputsPassword()">Add</button>
    <button id="save-button" onclick="SavePassword()" style="display: none;">Save</button>
    <button id="cancel-button" onclick="HideInputsPassword()" style="display: none;">Cancel</button>

    <!-- scripts -->
    <script src="js/functions.js"></script>
    <script src="js/index.js"></script>
</body>

</html>