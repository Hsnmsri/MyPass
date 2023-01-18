<?php
// require_once('config.php');
if (isset($_POST['username']) && isset($_POST['password'])) {
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form method="post">

        <h1>Login</h1>

        <label>UserName :</label>
        <input type="text" name="username">

        <br><br>

        <label>Password :</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit">Login</button>

    </form>

</body>

</html>