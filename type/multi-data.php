
<?php
    // Print POST data 
    //print_r($_POST);

    if(!$_POST){

        echo ('<a href="multi.html">Student Registration</a>');

        exit;
        
    }

    // Assign values 
    $data = $_POST;

    

    $admission = $data["admission"];
    $fathername = $data["fathername"];
    $studentname = $data["studentname"];
    $gender = $data["gender"];
    $grade = $data["grade"];
    $subjects = $data["subjects"];
    $dob = $data["dob"];
    $house = $data["house"];
    $sports = $data["sports"];
    $address = $data["address"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
</head>
<body>
    <h2>Student Registration Data</h2>
    <table border="1">
        <tr>
            <th>Admission No</th>
            <td><?php echo($admission); ?></td>
        </tr>
        <tr>
            <th>Father Name</th>
            <td><?php echo($fathername); ?></td>
        </tr>
        <tr>
            <th>Student Name</th>
            <td><?php echo($studentname); ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo($gender); ?></td>
        </tr>
        <tr>
            <th>Grade</th>
            <td><?php echo($grade); ?></td>
        </tr>
        <tr>
            <th>subjects</th>
            <td><?php echo implode(",",$subjects); ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?php echo($dob); ?></td>
        </tr>
        <tr>
            <th>House</th>
            <td><?php echo($house); ?></td>
        </tr>
        <tr>
            <th>Sports</th>
            <td><?php echo implode(",",$sports); ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo($address); ?></td>
        </tr>
    </table>
</body>
</html>
