<?php

$servername = "localhost";  // Define the server name where the database is hosted.
$username = "root";   // Define the username for accessing the database.
$password = ""; // Define the password for the database user.
$dbname = "php_crud"; // Define the name of the database you want to connect to.


// Establish a connection to the MySQL database using the defined variables.
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check if the connection was successful.
if (!$conn) {

    die("Connection failed " . mysqli_connect_error());
}

?>