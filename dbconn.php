<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    die("Connection failed " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $mobile = $_POST['mobilenumber'];

    //access the database


    //insert query
    $sql = "INSERT INTO users (firstName, lastName, emailAddress, mobileNumber) VALUES ('$fname', '$lname', '$email', '$mobile') ";

    //checking
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("location: read.php"); //linked to read.php

    } else {

        die("Connection failed " . mysqli_connect_error());
    }
}

?>