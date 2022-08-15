<?php include "./php/login.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/basestyle/basestyle.css">
    <link rel="stylesheet" href="/css/login.css">

    <title>Login | MyPass</title>
</head>

<body>

    <!-- back ground image -->
    <img src="img/BG.png" alt="skybackground" class="back-ground">

    <form method="post" class="main bgcolor-0D1321">

        <h1 class="main-title color-fff">Login</h1>
        
        <div>
        <label>UserName</label>
        <input type="text" name="username">
        </div>

        <div>
        <label>Password</label>
        <input type="password" name="password">
        </div>

        <button type="submit">Login</button>

    </form>
</body>

</html>