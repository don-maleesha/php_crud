<?php

include "dbconn.php"; //link database connection

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
    <div class="container">
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
            <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>