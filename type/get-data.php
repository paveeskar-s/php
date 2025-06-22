<?php
    // Print POST data for debugging
    print_r($_POST);

    // Assign values from $_POST
    $data = $_POST;

    $fname = $data["firstname"];
    $lname = $data["lastname"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Firstname</th>
            <td><?php echo($fname); ?></td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td><?php echo($lname); ?></td>
        </tr>
    </table>
</body>
</html>
