<?php

session_start();

date_default_timezone_set('Asia/Tehran');

// Set Constants
define("SITE_DOMAIN", "http://ors.shop");
define("SITE_PATH", __DIR__);

// Database Connection
$DataBaseConnectionInfo = [
    'host' => 'localhost',
    'dbUserName' => 'mypass_user',
    'dbPassword' => 'hsnmsri61542493',
    'dbDataBaseName' => 'mypass',
];
$AppDBConnection = mysqli_connect($DataBaseConnectionInfo['host'], $DataBaseConnectionInfo['dbUserName'], $DataBaseConnectionInfo['dbPassword'], $DataBaseConnectionInfo['dbDataBaseName']);
mysqli_query($AppDBConnection, "SET CHARACTER SET utf8");
