<?php

// Include the database connection file
include "dbconn.php";

// Get the user ID from the URL parameter
$id = $_GET['updateid'];

//select query
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Fetch the relevant data related to the given ID
$row = mysqli_fetch_assoc($result);
$fname = $row['firstName'];
$lname = $row['lastName'];
$email = $row['emailAddress'];
$mobile = $row['mobileNumber'];
$gender = $row['gender'];
$subjects = $row['subjects'];
$digree = $row['digree'];

// Check if the update form has been submitted
if (isset($_POST['update'])){

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $mobile = $_POST['mobileNumber'];
    $gender = $_POST['gender'];
    $subjects = $_POST['subjects'];
    $allData = implode(",", $subjects);
    $digree = $_POST['digree'];
    

    //update query
    $sql = "UPDATE users SET firstName = '$fname', lastName= '$lname', emailAddress = '$email', mobileNumber = '$mobile',  subjects = '$allData', gender = '$gender', digree = '$digree' WHERE id = $id";
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
            <div class="form-check-inline my-3">
                <label class="form-check-label" for="chem">Chemistry</label>
                <input class="form-check-input" type="checkbox" value="Chemistry" id="chem" name="subjects[]">
            </div>
            <div class="form-check-inline my-3">
                <label class="form-check-label" for="cs0">Physics</label>
                <input class="form-check-input" type="checkbox" value="Physics" id="cs0" name="subjects[]">
            </div>
            <div class="form-check-inline my-3">
                <label class="form-check-label" for="cm">Combined Mathematics</label>
                <input class="form-check-input" type="checkbox" value="Combined Mathematics" id="cm" name="subjects[]">
            </div>
            <div class="form-check-inline my-3">
                <label class="form-check-label" for="ict">information Communicaton Technology</label>
                <input class="form-check-input" type="checkbox" value="information Communicaton Technology" id="ict" name="subjects[]">
            </div>
            <div class="my-3">
                <input type="radio" name="gender" value="male">Male
            </div>
            <div>
                <input type="radio" name="gender" value="female">Female
            </div>
            <div class="my-3">
                <select name="digree" id="">
                    <option value="IS">information Systems</option>
                    <option value="CS">Computer Science</option>
                    <option value="SE">Software Engineerin</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary my-3" name="update">Update</button>
            </div>
        </form>
    </div>
</body>

</html>