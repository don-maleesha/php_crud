<?php

// Include the database connection file
include "dbconn.php";

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Retrieve form data from the POST request
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['emailAddress'];
    $mobile = $_POST['mobilenumber'];
    $subjects = $_POST['subjects']; // Array of subjects selected (checkboxes)
    $gender = $_POST['gender'];
    $digree = $_POST['digree'];

    // Convert the array of subjects into a comma-separated string
    $allData = implode(",", $subjects);

    // SQL query to insert the form data into the 'users' table
    $sql = "INSERT INTO users (firstName, lastName, emailAddress, mobileNumber, subjects, gender, digree) VALUES ('$fname', '$lname', '$email', '$mobile', '$allData', '$gender', '$digree') ";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {

        header("location: read.php"); // Redirect to 'read.php' if the insert was successful

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
                <label class="form-check-label" for="phy">Physics</label>
                <input class="form-check-input" type="checkbox" value="Physics" id="phy" name="subjects[]">
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
            <div class="my-3">
                <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>