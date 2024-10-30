<?php
$dbhost = 'localhost';
$dbuser = 'root';
$password = '';
$dbhome = 'db_geotera';

$dbconnect = new mysqli($dbhost, $dbuser, $password, $dbhome);

if($dbconnect->connect_error){
    die('server bermasalah');
}


?>