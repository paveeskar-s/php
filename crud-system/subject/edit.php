

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Subject</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="sub_name">Subject Name:</label>
        <input type="text" id="sub_name" name="sub_name" value="<?php echo ($subject['name']); ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>
