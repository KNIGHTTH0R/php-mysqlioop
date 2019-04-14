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

// $sql = "INSERT INTO student(name,address) VALUES ('bara','bekasi');";
// $sql .= "INSERT INTO student(name,address) VALUES ('anval','semarang')";

//execute single query
// if($mysqli->query($sql)) echo 'success';

//execute multiple query
// if($mysqli->multi_query($sql)) echo 'success';
// else echo 'failed'.$mysqli->error;

//sql injection
// $name = $mysqli->real_escape_string($_GET['user']);

//prepare statement -> no need escape string
// $statement = $mysqli->prepare('INSERT INTO student (name, address) VALUES (?,?)');
// $statement->bind_param('ss', $name, $address);

//input parameter and execute
// $name = 'bani';
// $address = 'karawang';
// $statement->execute();
//
// $name = 'boriel';
// $address = 'bandung';
// $statement->execute();

// select data
// $sql = "SELECT * FROM student";

// if($result->num_rows > 0){
  //data assosiative
  // while($row = $result->fetch_assoc()){
  //   echo $row['name'].' '.$row['address'].'<br>';
  // }

  //data object
  // while($row = $result->fetch_object()){
    // echo $row->name.' '.$row->address.'<br>';
  // }
// }

  //delete data
  // $sql = "DELETE FROM student WHERE name='anval'";

  // edit data
  // $sql = "UPDATE student SET name='anval' WHERE name='bori'";
  // $result = $mysqli->query($sql);
  //
  // if($result) echo 'success';
  // else echo 'failed';

  // select data with prepare statement
  $name = 'khoirul';
  $student = $mysqli->prepare("SELECT address FROM student WHERE name=?");
  $student->bind_param('s', $name);
  $student->execute();

  $student->bind_result($new);

  while($student->fetch()){
    echo $new;
  }

$mysqli->close();

?>
