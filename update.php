<?php

//connect database
include "dbconn.php";

$id = $_GET['updateid'];

//select query
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);

//fetch the relevant data related to $id
$row = mysqli_fetch_assoc($result);
$fname = $row['firstName'];
$lname = $row['lastName'];
$email = $row['emailAddress'];
$mobile = $row['mobileNumber'];

if (isset($_POST['update'])){

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $mobile = $_POST['mobileNumber'];

    //update query
    $sql = "UPDATE users SET firstName = '$fname', lastName= '$lname', emailAddress = '$email', mobileNumber = '$mobile' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){

        header("location: read.php");

    } else {

        die("Connection Failed. " . mysqli_connect_error());

    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" class="form-control" autocomplete="off" name="firstName" value="<?php echo $fname?>">
            </div>
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" class="form-control" autocomplete="off" name="lastName" value="<?php echo $lname?>">
            </div>
            <div class="mb-3">
                <label>Email Address</label>
                <input type="email" class="form-control" autocomplete="off" name="emailAddress" value="<?php echo $email?>">
            </div>
            <div class="mb-3">
                <label>mobile Number</label>
                <input type="mobile" class="form-control" autocomplete="off" name="mobileNumber" value="<?php echo $mobile?>">
            </div>
            <button type="submit" class="btn btn-primary my-3" name="update">update</button>
        </form>
    </div>
</body>

</html>