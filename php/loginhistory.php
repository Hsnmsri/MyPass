<?php
include "php/connectdb.php";
include "php/functions.php";
session_start();
Check_User_session();
$login_history_data = mysqli_query($MyPassdbConnection, "SELECT * FROM mypass_login_history");
$login_history_data_array = mysqli_fetch_all($login_history_data);
?>
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