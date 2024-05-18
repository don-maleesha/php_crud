<?php

include "dbconn.php";

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
    <div class="container  my-5">
        <table class="table table-striped">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">NIC</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email <Address></Address>
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                // Get the total number of rows returned
                $num = mysqli_num_rows($result);

                // Define the maximum number of rows per page
                $rows_per_page = 4;

                // Calculate the total number of pages required
                $total_pages = ceil($num / $rows_per_page);

                // Loop through the number of pages and create pagination buttons
                for ($button = 1; $button <= $total_pages; $button++) { 
                    
                    // Display pagination button
                    echo '<button class="btn btn-dark mx-1 mb-3"><a href="pagination.php?page='.$button.'" class="text-light">'.$button.'</a></button> ';
                
                }

                // Check if the 'page' parameter is set in the URL
                if (isset($_GET['page'])) {
                    

                    $page = $_GET['page'];

                } else {
                    
                    // Default to the first page if 'page' parameter is not set
                    $page = 1;

                }

                // Calculate the starting row for the current page
                $starting_limit = ($page-1) * $rows_per_page;

                // Query to select a subset of users for the current page
                $sql = "SELECT * FROM users LIMIT " . $starting_limit . ',' . $rows_per_page;

                $result = mysqli_query($conn, $sql);

                // Loop through the result set and display each row in the table
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['firstName'] . "</td>
            <td>" . $row['lastName'] . "</td>
            <td>" . $row['emailAddress'] . "</td>
        </tr>";
                }

                ?>

            </tbody>
        </table>
    </div>
</body>