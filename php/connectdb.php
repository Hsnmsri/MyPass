<?php
//Database information
$host = 'HOST_NAME';
$dbUserName = 'USER_NAME';
$dbPassword = 'PASSWORD';
$dbDataBaseName = 'DATABASE_NAME';
//Query
$MyPassdbConnection = mysqli_connect($host, $dbUserName, $dbPassword, $dbDataBaseName);
mysqli_query($MyPassdbConnection, "SET CHARACTER SET utf8");