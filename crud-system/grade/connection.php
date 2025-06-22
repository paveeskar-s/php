<?php


$sub_name = $_POST['sub_name'];

$connection = mysqli_connect("localhost","root","root","crud_system");

if(!$connection){
    die ("Connection failded:".mysqli_connect_error());
}
   $sql = "INSERT INTO grade(name) VALUES('$grade_name')";

    $result = mysqli_query($connection,$sql);
        

    if (!$result){
    die("Query failded:   ".mysqli_error($connection));
    }
 
    
    mysqli_close($connection);
header("Location: index.php");
?>
