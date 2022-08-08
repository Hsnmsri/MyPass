<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password List</title>
</head>

<body>

    <h1>Password List</h1>
    <button onclick="Redirector('index.php')">Home</button>
    <button onclick="Redirector('setting.php')">Setting</button>
    <button onclick="Redirector('loginhistory.php')">Login History</button>
    <button onclick="Redirector('passwordlist.php')">Refresh</button>
    <button  onclick="Redirector('index.php?user=logout')">Logout</button>

    <br><br>
    <br><br>

    <?php include "php/passwordlist.php"; ?>

    <!-- script -->
    <script src="js/functions.js"></script>
    <script src="js/password_list.js"></script>
</body>

</html>