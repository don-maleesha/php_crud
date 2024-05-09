<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_crud";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        # code...
        die ("Connection Failed. ". mysqli_connect_error());

    }
    
?>