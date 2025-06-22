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
    $sql="SELECT`id`,`name`FROM`subjects`";

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
                <th>Subject Name</th>
                <th>Delete</th>
                <th>Edit</th>


        </tr>
         <?php foreach ($subjects as $subject): ?>
        <tr>
            <td><?php echo $subject['id']; ?></td>
            <td><?php echo $subject['name']; ?></td>
            <td>  <a href="index.php?section=subject&page=delete&id=<?= $subject['id'] ?>" onclick="return confirm('Do you want to delete?')">Delete</a></td>
            <td><a href="index.php?section=subject&page=edit&id=<?= $subject['id'] ?>">Edit</a></td>            
           
        </tr>
        <?php endforeach; ?>
       
       


</body>
</html>