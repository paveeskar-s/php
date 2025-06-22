<?php


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$admistion_no = $_POST['admistion_no'];
$gender=$_POST['gender'];
$grade=$_POST['grade'];
$subjects= isset($_POST['subjects']) ? implode(",", $_POST['subjects']) : '';
$address=$_POST['address'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$nicnumber=$_POST['nicnumber'];
$hope= isset($_POST['hope']) ? implode(",", $_POST['hope']) : '';



$connection = mysqli_connect("localhost","root","root","crud_system");

if(!$connection){
    die ("Connection failded:".mysqli_connect_error());
}
    $sql="INSERT INTO `student`(`admision_no`,`first_name`,`last_name`,`gender`,`grade`,`subject`,`address`,`email`,`telephone`,`nic_no`,`hope`)
    VALUES('$admistion_no','$first_name','$last_name','$gender','$grade','$subjects','$address','$email','$telephone','$nicnumber','$hope');";

    $result = mysqli_query($connection,$sql);
        

    if (!$result){
    die("Query failded:   ".mysqli_error($connection));
    }
 
    
    mysqli_close($connection);
header("Location: index.php");
?>
