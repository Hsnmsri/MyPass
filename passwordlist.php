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
    <button onclick="Redirector('setting.php')">Setting</button>
    <button onclick="Redirector('loginhistory.php')">Login History</button>
    <button  onclick="Redirector('passwordlist.php')">Password List</button>
    <button  onclick="Redirector('index.php?user=logout')">Logout</button>

    <br><br>
    <br><br>

    <table border="1">

        <thead>
            <tr>
                <td>Domain</td>
                <td>UserName</td>
                <td>Password</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>mrmansouri.ir</td>
                <td>hsnmsri</td>
                <td>61542493</td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>
            </tr>
        </tbody>
    </table>

</body>

</html>