<?php
include "php/connectdb.php";
include "php/functions.php";
session_start();
Check_User_session();
$password_list_data = mysqli_query($MyPassdbConnection, "SELECT * FROM mypass_passlist");
$password_list_data_array = mysqli_fetch_all($password_list_data);
?>
<table border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>Domain</td>
            <td>UserName</td>
            <td>Password</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($password_list_data_array as $key => $value) {
            echo "<tr> \n";
            foreach ($password_list_data_array[$key] as $keyArr => $valueArr) {
                echo ('<td>' .  htmlspecialchars($password_list_data_array[$key][$keyArr]) . "</td> \n");
            }
            echo ("<td><button disabled> edit </button></td> \n");
            echo ('<td>' . '<button onclick=' . '"RemovePasswrod(' . "'" . $password_list_data_array[$key][0] . "'" . ')">' . 'delete' . '</button>' . '</td>' . "\n");
            echo "</tr> \n";
        }
        ?>
    </tbody>
</table>