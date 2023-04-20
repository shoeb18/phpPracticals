<?php
// connecting to the database
$server_name = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($server_name, $username, $password);

// die if connection is not successful
if (!$conn){
die("Sorry we failed to connect : ". mysqli_connect_error());
}
else{
echo "Connection was successful";
}
echo "<br>";

// create a database
$sql = "CREATE DATABASE MYDB";
$result = mysqli_query($conn, $sql);

// check for the database creation success
if ($result){
echo "Database is created successfully.";
}
else{
echo "Database is not created successfully due to this error --> ". mysqli_error($conn);
}

?>