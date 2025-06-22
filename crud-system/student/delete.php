<?php

    if(!isset($_GET['id'])){

        echo "No ID provider.";
        exit;
    }

    
    if(!isset($_GET['id'])){

        echo "Invalid ID.";
        exit;
    }

    
$connection = mysqli_connect("localhost","root","root","crud_system");

if(!$connection){
    die ("Connection failded:".mysqli_connect_error());
}
    $sql="DELETE FROM`student`WHERE `id` = ".$_GET['id'];
    $result = mysqli_query($connection,$sql);
        

    if (!$result){
    die("Query failded:   ".mysqli_error($connection));
    }

    mysqli_close($connection);
    header("Location: index.php");
