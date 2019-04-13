<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'php-mysqlioop';

$mysqli = new mysqli($host, $user, $pass, $db);

//test connection db
if($mysqli->connect_errno){
  echo 'Failed connect to mysql'.$mysqli->connect_error;
}
?>
