<!-- This function is for connecting to mysql database and return an error if there is connection problem -->

<?php
$servername = "localhost";
$username = "nischal";
$password = "Julianbrandt19!!";
$dbname = "travelApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// error message variable.
$error_msgs = "";

// Check connection
if ($conn->connect_error) {
  print("Connection failed: " . $conn->connect_error);
}

?>