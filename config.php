<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'phpmyadmin');
define('DB_PASSWORD', 'Workout974!');
define('DB_NAME', 'cyber_room');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
 <?php

$dbHost = '127.0.0.1';
$dbName = 'cyber_room';
$dbUsername = 'phpmyadmin';
$dbPassword = 'Workout974!';

$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>