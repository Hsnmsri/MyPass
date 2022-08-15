<?php
//Database information
$host = 'localhost';
$dbUserName = 'mypass_user';
$dbPassword = 'hsnmsri61543493';
$dbDataBaseName = 'mypass';
//Query
$MyPassdbConnection = mysqli_connect($host, $dbUserName, $dbPassword, $dbDataBaseName);
mysqli_query($MyPassdbConnection, "SET CHARACTER SET utf8");