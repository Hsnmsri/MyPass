<?php include "./php/loginhistory.php"; ?>
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
    <button onclick="Redirector('index.php')">Home</button>
    <button onclick="Redirector('setting.php')">Setting</button>
    <button onclick="Redirector('passwordlist.php')">Password List</button>
    <button onclick="Redirector('loginhistory.php')">Refresh</button>
    <button onclick="Redirector('index.php?user=logout')">Logout</button>

    <br><br>
    <br><br>

    <?php include "./php/loginhistory.php"; ?>
    <table border="1">

        <thead>
            <tr>
                <td>id</td>
                <td>Time</td>
                <td>Date</td>
                <td>IP</td>
                <td>Detail</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($login_history_data_array as $key => $value) {
                echo '<tr>';
                foreach ($login_history_data_array[$key] as $keyArr => $valueArr) {
                    echo '<td>' . $login_history_data_array[$key][$keyArr] . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- script -->
    <script src="js/functions.js"></script>

</body>

</html>