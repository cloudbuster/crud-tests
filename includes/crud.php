<?php




function createDataBase() {

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $dataBaseName = 'justTesting';

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database usin SQL commands
  $sql = "CREATE DATABASE IF NOT EXISTS" . $dataBaseName;
  if ($conn->query($sql) === TRUE) {
    echo ("Database " . $dataBaseName  . " created successfully.");
  } else {
    echo "Error creating database: " - $conn->error;
  }

  // Close connection after creating database
  $conn->close();

}

