<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$connection = mysqli_connect("localhost","root","root","crud_system");

if(!$connection){
    die ("Connection failded:".mysqli_connect_error());
}
    $sql="SELECT`id`,`admision_no`, `first_name`,`last_name`,`gender`,`grade`,`subject`,`address`,`email`,`telephone`,`nic_no`,`hope`FROM`student`";

    $result = mysqli_query($connection,$sql);
        

    if (!$result){
    die("Query failded:   ".mysqli_error($connection));
    }

    $students= mysqli_fetch_all($result,MYSQLI_ASSOC);
   // echo"<pre>";
   //print_r($students);
   // echo"<pre>";

    mysqli_close($connection);

?>

    <a href="create.php">Create</a>

    <table border="1">
        <tr>
                <th>ID</th>
                <th>Admission No</th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Grade</th>
                <th>Subjects</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>NIC NO</th>
                <th>Hope</th>
                <th>Delete</th>
                <th>Edit</th>


        </tr>
    <?php foreach($students as $student): ?>
        <tr>
                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['admision_no'];?></td>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['grade']; ?></td>
                <td><?php echo $student['subject']; ?></td>
                <td><?php echo $student['address']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['telephone']; ?></td>
                <td><?php echo $student['nic_no']; ?></td>
                <td><?php echo $student['hope']; ?></td>
                <td><a href="index.php?section=student&page=delete&id=<?php echo $student['id']; ?>" onclick="return confirm('Do you want to delete?')">Delete</a></td>
                <td><a href="index.php?section=student&page=edit&id=<?php echo $student['id']; ?>">Edit</a></td>

       </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>