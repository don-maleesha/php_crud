<?php

include "dbconn.php"; //db connect

if (isset($_POST['submit'])) {
    # code...
    $data = $_POST['checkboxData']; //this is array form

    //convert array into string
    $allData = implode("," , $data);

    //insert query
    $sql = "INSERT INTO checkbox (checkboxData) VALUES ('$allData')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        # code...
        echo "Connected Succesfully";

    } else {

        die ("Connection Failed" . mysqli_connect_error());

    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkbox Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-check my-3">
                <label class="form-check-label" for="is0">Chemistry</label>
                <input class="form-check-input" type="checkbox" value="Chemistry" id="is0" name="checkboxData[]">
            </div>
            <div class="form-check my-3">
                <label class="form-check-label" for="cs0">Physics</label>
                <input class="form-check-input" type="checkbox" value="Physics" id="cs0" name="checkboxData[]">
            </div>
            <div class="form-check my-3">
                <label class="form-check-label" for="is1">Combined Mathematics</label>
                <input class="form-check-input" type="checkbox" value="Combined Mathematics" id="is1" name="checkboxData[]">
            </div>
            <div class="form-check my-3">
                <label class="form-check-label" for="cs1">information Communicaton Technology</label>
                <input class="form-check-input" type="checkbox" value="information Communicaton Technology" id="cs1" name="checkboxData[]">
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>