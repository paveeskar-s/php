<!DOCTYPE html>
<html>
<head>
    <title>Structured Form Table</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid #000;
            padding: 15px;
            text-align: center;
        }
        .photo {
            width: 120px;
            height: 120px;
        }
    </style>
</head>
<body>

        <table>
            <tr>
                <td rowspan="2">
                    <label for="photo">Photo:</label><br>
                  
                </td>
                <td><input type="text" name="field1" placeholder="Field 1"></td>
                <td><input type="text" name="field2" placeholder="Field 2"></td>
                <td><input type="text" name="field3" placeholder="Field 3"></td>
            </tr>
            <tr>
                <td><input type="text" name="field4" placeholder="Field 4"></td>
                <td><input type="text" name="field5" placeholder="Field 5"></td>
                <td><input type="text" name="field6" placeholder="Field 6"></td>
            </tr>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>

    <?php
   
    ?>

</body>
</html>
