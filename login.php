<?php
    // Connect to database
    include "./php/connectdb.php";

    $loginData=mysqli_query($MyPassdbConnection,"SELECT FROM ")
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

    <form action="#" method="post">
        
        <h1>Login</h1>

        <label>UserName :</label>
        <input type="text">
        
        <br><br>
        
        <label>Password :</label>
        <input type="password">
        
        <br><br>

        <button type="submit">Login</button>

    </form>

</body>

</html>