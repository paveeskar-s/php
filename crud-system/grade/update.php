<?php

$id = $_POST['id'];
$grade_name = $_POST['grade_name'];


$connection = mysqli_connect("localhost","root","root","crud_system");

if(!$connection){
    die ("Connection failded:".mysqli_connect_error());
}
    $sql=" = UPDATE`grade`SET`grade_name` = '$grade_name',WHERE `id` = '$id';";

    $result = mysqli_query($connection,$sql);
        

    if (!$result){
    die("Query failded:   ".mysqli_error($connection));
    }
 
    
    mysqli_close($connection);
header("Location: index.php");
?>
