<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'php-mysqlioop';

//connect db
$mysqli = new mysqli($host, $user, $pass, $db);

//test connection db
if($mysqli->connect_errno){
  echo 'Failed connect to mysql'.$mysqli->connect_error;
}

$sql = "INSERT INTO student(name,address) VALUES ('khoirul','jakarta')";

if($mysqli->query($sql)) echo 'success';
else echo 'failed'.$mysqli->error;

$mysqli->close();

?>
