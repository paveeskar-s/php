
<?php
    // Print POST data 
    //print_r($_POST);

    if(!$_POST){

        echo ('<a href="multi.html">Student Registration</a>');

        exit;
        
    }

    // Assign values 
    $data = $_POST;

    $admission = $data["admission"];
    $fathername = $data["fathername"];
    $studentname = $data["studentname"];
    $gender = $data["gender"];
    $grade = $data["grade"];
    $subjects = $data["subjects"];
    $dob = $data["dob"];
    $house = $data["house"];
    $sports = $data["sports"];
    $address = $data["address"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form>
    <fieldset>
    <legend>Student Registration</legend>
    <table border="0">
        <tr>
            <td><label for="admission">Admission No:</label></td>
            <td><input type="text" id="admission" name="admission"value="<?php echo($admission)?>"></td>
        </tr>
        <tr>
            <td><label for="fathername">Father Name:</label></td>
            <td><input type="text" id="fathername" name="fathername"value="<?php echo($fathername)?>"></td>
        </tr>
        <tr>
            <td><label for="studentname">Student Name:</label></td>
            <td><input type="text" id="studentname" name="studentname"value="<?php echo($studentname)?>"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                    <input type="radio" id="male" name="gender" value="Male" <?php if($gender == "Male") echo 'checked'; ?>>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female" <?php if($gender == "Female") echo 'checked'; ?>>
                    <label for="female">Female</label>
                </td>
        </tr>
       <tr>
                <td><label for="grade">Grade:</label></td>
                <td>
                    <select name="grade" id="grade">
                        <option value="10A" <?php if($grade=="10A") echo 'selected'; ?>>10A</option>
                        <option value="10B" <?php if($grade=="10B") echo 'selected'; ?>>10B</option>
                        <option value="10C" <?php if($grade=="10C") echo 'selected'; ?>>10C</option>
                    </select>
                </td>
            </tr>
        <tr>
            
            <td><label for="subjects">Subjects:</label></td>
                <td>
                    <?php
                    $allSubjects = ["Maths", "Tamil", "English", "Science", "IT"];
                    foreach ($allSubjects as $sub) {
                        echo '<input type="checkbox" name="subjects[]" value="' . $sub . '"';
                        if (in_array($sub, $subjects)) echo ' checked';
                        echo '>' . $sub;
                    }
                    ?>
                </td>
        </tr>
        <tr>
            
            <td><label for="dob">Birth Date:</label></td>
            <td><input type="date" id="dob" name="dob" value="<?php echo $dob; ?>"></td>
        </tr>
        <tr>
            <td><label for="house">House:</label></td>
            <td>
                <select name="house" id="house">
                        <option value="Red" <?php if($house=="Red") echo 'selected'; ?>>Red</option>
                        <option value="Blue" <?php if($house=="Blue") echo 'selected'; ?>>Blue</option>
                        <option value="Green" <?php if($house=="Green") echo 'selected'; ?>>Green</option>
                    </select>
            </td>
        </tr>
        <tr>
            <td><label for="sports">Sports:</label></td>
            <td>
               <select name="sports[]" id="sports" multiple>
                        <?php
                        $allSports = ["100m", "High Jump", "Long Jump", "200m", "1500m"];
                        foreach ($allSports as $sport) {
                            echo '<option value="' . $sport . '"';
                            if (in_array($sport, $sports)) echo ' selected';
                            echo '>' . $sport . '</option>';
                        }
                        ?>
                    </select>
            </td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><textarea name="address" id="address"><?php echo $address;?></textarea></td>
        </tr>
       
    </table>
    </fieldset>
</form>

</body>
</html>

