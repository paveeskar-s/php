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
    $sql="SELECT`id`,`grade_name`,`update_at`,`create_at`,`delete_at`FROM`grade`";

    $result = mysqli_query($connection,$sql);
        

    if (!$result){
    die("Query failded:   ".mysqli_error($connection));
    }

    $subjects= mysqli_fetch_all($result,MYSQLI_ASSOC);
   // echo"<pre>";
   //print_r($students);
   // echo"<pre>";

    mysqli_close($connection);

?>

    <a href="create.php">Create</a>

    <table border="1">
        <tr>
                <th>ID</th>
                <th>Grade Name</th>
                <th>update_At</th>
                <th>Create_At</th>
                <th>Delete_At</th>
                <th>Delete</th>
                <th>Edit</th>


        </tr>
         <?php foreach ($grades as $grade): ?>
        <tr>
            <td><?php echo $grade['id']; ?></td>
            <td><?php echo $grade['grade_name']; ?></td>
            <td><?php echo $grade['update_at']; ?></td>
            <td><?php echo $grade['create_at']; ?></td>
            <td><?php echo $grade['update_at']; ?></td>
            <td><?php echo $grade['delete_at']; ?></td>
            <td><a href="delete.php?id=<?php echo $grade['id']; ?>" onclick="return confirm('Do you want to delete?')">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $grade['id']; ?>">Edit</a></td>
        </tr>
        <?php endforeach; ?>
       
       


</body>
</html>