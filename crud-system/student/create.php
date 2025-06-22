

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connection.php" method="post">
    <fieldset>
        <legend>Student Registration</legend> 
    <table border="0">
            <tr>
                <td><label for="admistion_no">Admistion No:</label></td>
                <td><input type="text" id="admistion_no" name="admistion_no"></td>
            </tr>
            <tr>
                <td><label for="first_name">First name:</label></td>
                <td><input type="text" id="first_name" name="first_name"></td>
            </tr>
            <tr>
                <td><label for="last_name">Last name:</label></td>
                <td><input type="text" id="last_name" name="last_name"></td>
            </tr>
            <tr>
            <tr>
            <td><label for="gender">Gender :</label></td>
            <td>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
            </td>
        </tr>
        <tr>
            <td><label for="grade">Grade:</label></td>
            <td>
                <select name="grade" id="grade">
                    <option value="10A">10A</option>
                    <option value="10B">10B</option>
                    <option value="10C">10C</option>
                </select>
            </td>
       
            <tr>
            
            <td><label for="subjects">Subjects:</label></td>
            <td>
                <input type="checkbox" name="subjects[]" value="Maths">Maths
                <input type="checkbox" name="subjects[]" value="Tamil">Tamil
                <input type="checkbox" name="subjects[]" value="English">English
                <input type="checkbox" name="subjects[]" value="Science">Science
                <input type="checkbox" name="subjects[]" value="IT">IT
            </td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><textarea name="address" id="address"></textarea></td>
        </tr>
        <tr>   
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
          <tr>   
            <td><label for="telephone">Telephone:</label></td>
            <td><input type="number" id="telenumber" name="telephone"></td>
        </tr>
          <tr>   
            <td><label for="Nic">NIC No:</label></td>
            <td><input type="Number" id="nicnumber" name="nicnumber"></td>
        </tr>
         <tr>
            <td><label for="hope">Hope:</label></td>
            <td>
                <select name="hope[]" id="hope" multiple>
                    <option value="Doctor">Doctor</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Teacherr">Teacher</option>
                    <option value="Developer">Developer</option>
                </select>
            </td>
        </tr>
            
        <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
        </tr>
    </table>
    </fieldset>
</form>
</body>
</html>