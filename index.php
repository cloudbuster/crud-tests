<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Crud Tests</title>
</head>
<body>
 <h1>CRUD Tests</h1>

<?php

// Create database
function createDataBase($dataBaseName) {

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database usin SQL commands
  $sql = "CREATE DATABASE IF NOT EXISTS " . $dataBaseName;
  if ($conn->query($sql) === TRUE) {
    echo ("Database: " . $dataBaseName . " created successfully.");
  } else {
    echo "Error creating database: " - $conn->error;
  }

  // Close connection after creating database
  $conn->close();

}

// Drop database
function dropDataBase($dataBaseName) {

}

?>

<!-- 
Ok eli ainakin kun submit, niin silloin tallentuu ihan sillä formi hässäkällä. Ei siinä kai muuta ole.
Samalla tavalla varmaan sitten voi poistaa. ym... Se firm triggeröi php:n ja sitten locationin (eli vaihtaa sivua)
Sitten pitäisi hakea sieltä tietokannasta siinä toisessa sivussa, mutta miten?

Ehkä pitää tutustua siihen Tuikan esimerkkiin.


-->

</body>
</html>
