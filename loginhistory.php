<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login History</title>
</head>

<body>

    <h1>Login History</h1>
    <button onclick="Redirector('setting.php')">Setting</button>
    <button onclick="Redirector('loginhistory.php')">Login History</button>
    <button  onclick="Redirector('passwordlist.php')">Password List</button>
    <button  onclick="Redirector('index.php?user=logout')">Logout</button>

    <br><br>
    <br><br>

    <table border="1">

        <thead>
            <tr>
                <td>Time</td>
                <td>Date</td>
                <td>IP</td>
                <td>Detail</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>

</body>

</html>