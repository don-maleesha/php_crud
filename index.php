<?php

include "dbconn.php"; //link database connection

if (isset($_POST['submit'])) {

    //access the database
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $mobile = $_POST['mobilenumber'];
    $subjects = $_POST['subjects']; //this is array form(checkbox)

    //convert array into string(checkbox)
    $allData = implode(",", $subjects);

    //insert query
    $sql = "INSERT INTO users (firstName, lastName, emailAddress, mobileNumber, subjects) VALUES ('$fname', '$lname', '$email', '$mobile', '$allData') ";

    //checking
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("location: read.php"); //linked to read.php

    } else {

        die("Connection failed " . mysqli_connect_error());
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <form method="post">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Enter your first name" name="firstName" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" name="lastName" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="emailAddress" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="mobile" class="form-control" id="mobile" placeholder="Enter your mobile" name="mobilenumber" autocomplete="off">
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
            <div>
                <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>