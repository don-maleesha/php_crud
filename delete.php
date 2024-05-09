<?php

    //db connection
    include "dbconn.php";

    $id = $_GET['deleteid'];

    //delete query
    $sql = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){

        header("location: read.php");

    } else {

        die("Connection Failed. " . mysqli_connect_error());

    }
    
?>