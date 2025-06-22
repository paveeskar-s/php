<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID not provided!");
}

$id = $_GET['id'];


$sql = "SELECT * FROM subjects WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $subject = mysqli_fetch_assoc($result);
} else {
    die("Error: Subject not found!");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sub_name = $_POST['sub_name'];
    $sql = "UPDATE subjects SET name='$sub_name' WHERE id=$id";

    if (mysqli_query($connection, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>