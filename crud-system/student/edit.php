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

$sql = "SELECT * FROM student WHERE id = $id";
$result = mysqli_query($connection, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Student not found.");
}

$student = mysqli_fetch_assoc($result);
mysqli_close($connection);

$subjects = explode(",", $student['subject']);
$hopes = explode(",", $student['hope']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        table { border-collapse: collapse; width: 100%; max-width: 600px; }
        
    </style>
</head>
<body>
<fieldset>
    <legend>Edit Student</legend>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <table>
            <tr>
                <td><label for="admision_no">Admission No:</label></td>
                <td><input type="text" id="admision_no" name="admistion_no" value="<?php echo $student['admision_no']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="first_name">First Name:</label></td>
                <td><input type="text" id="first_name" name="first_name" value="<?php echo $student['first_name']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name:</label></td>
                <td><input type="text" id="last_name" name="last_name" value="<?php echo $student['last_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <label><input type="radio" name="gender" value="Male" <?php if ($student['gender'] == 'Male') echo 'checked'; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php if ($student['gender'] == 'Female') echo 'checked'; ?>> Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="grade">Grade:</label></td>
                <td>
                    <select id="grade" name="grade" required>
                        <?php
                        $grades = ["10A", "10B", "10C"];
                        foreach ($grades as $grade) {
                            $selected = ($student['grade'] === $grade) ? 'selected' : '';
                            echo "<option value=\"$grade\" $selected>$grade</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Subjects:</td>
                <td>
                    <?php
                    $allSubjects = ["Math", "Science", "English", "Tamil", "IT"];
                    foreach ($allSubjects as $subj) {
                        $checked = in_array($subj, $subjects) ? 'checked' : '';
                        echo "<label><input type=\"checkbox\" name=\"subjects[]\" value=\"$subj\" $checked> $subj</label><br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea id="address" name="address" required><?php echo $student['address']; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" value="<?php echo $student['email']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="telephone">Telephone:</label></td>
                <td><input type="text" id="telephone" name="telephone" value="<?php echo $student['telephone']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="nicnumber">NIC Number:</label></td>
                <td><input type="text" id="nicnumber" name="nicnumber" value="<?php echo $student['nic_no']; ?>" required></td>
            </tr>
            <tr>
                <td>Future Hopes:</td>
                <td>
                    <?php
                    $allHopes = ["Doctor", "Engineer", "Teacher", "Developer"];
                    foreach ($allHopes as $hope) {
                        $checked = in_array($hope, $hopes) ? 'checked' : '';
                        echo "<label><input type=\"checkbox\" name=\"hope[]\" value=\"$hope\" $checked> $hope</label><br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Update Student">
                    <a href="index.php">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>
