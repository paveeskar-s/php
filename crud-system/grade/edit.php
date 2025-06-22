<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid or missing student ID.";
    exit;
}

$id = (int) $_GET['id'];

$connection = mysqli_connect("localhost", "root", "root", "crud_system");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM grade WHERE id = $id";
$result = mysqli_query($connection, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("grade not found.");
}

$grade = mysqli_fetch_assoc($result);
mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Grade</title>
</head>
<body>
    <form action="connection.php" method="post">
        <label for="grade_name">Grade Name:</label>
        <input type="text" id="grade_name" name="grade_name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
