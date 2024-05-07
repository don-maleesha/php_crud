<?php

//connect the database
include "dbconn.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display <Datal></Datal>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php

                //select query
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['id'];
                    $fname = $row['firstName'];
                    $lname = $row['lastName'];
                    $email = $row['emailAddress'];
                    $mobile = $row['mobileNumber'];

                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $fname . '</td>
                    <td>' . $lname . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>
                <a href="#" class="btn btn-primary">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
                    </tr>';
                }

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>