<?php

include "dbconn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="w'id'th=device-w'id'th, initial-scale=1.0">
    <title>Search Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="search data" name="search">
            <button class="btn btn-dark btn-sm" name="submit">Search</button>
        </form>
        <div class="container my-5">
            <table class="table">
                <?php

                if (isset($_POST['submit'])) {

                    $search = $_POST['search'];

                    $sql = "SELECT * FROM users WHERE id LIKE '%$search%' OR firstname LIKE '%$search%' OR lastname LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {

                        // Check if any rows were returned
                        if (mysqli_num_rows($result) > 0) {
                           
                            // Display table headers
                            echo '<tr>
                    <th scope="row">Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Gender</th>
                    <th>Subjects</th>
                    <th>Degree</th>';

                            // Loop through and display each row of results
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<tbody>
                    <tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['firstName'] . "</td>
                        <td>" . $row['lastName'] . "</td>
                        <td>" . $row['emailAddress'] . "</td>
                        <td>" . $row['mobileNumber'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>" . $row['subjects'] . "</td>
                        <td>" . $row['digree'] . "</td>
                    </tr>
                    </tbody>";
                            }
                        } else {
                            # code...

                            echo '<h2 class="text-danger">Data Not Found</h2>';
                        }
                    }
                }

                ?>
            </table>
        </div>
    </div>
</body>

</html>