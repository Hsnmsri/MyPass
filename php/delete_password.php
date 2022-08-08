<?php
include "connectdb.php";
$passwrodId = trim($_POST['pass_id']);
mysqli_query($MyPassdbConnection, "DELETE FROM mypass_passlist WHERE mypass_passlist.id = $passwrodId");
echo true;
