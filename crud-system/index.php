<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="100%" height="600" border="1" cellpadding="0" cellspacing="0">
        
        <tr height="100" style="background-color: lightblue;">
            <td colspan="2"><center>Student Management</center></td>
        </tr>

        
        <tr height="400">
            
            <td width="20%" style="background-color: lightcyan;">
                <ul>
                    <li><a href="index.php?section=student&page=index">Students</a></li>
                    <li><a href="index.php?section=grade&page=index">Grade</a></li>
                    <li><a href="index.php?section=subject&page=index">Subject</a></li>
                </ul>
            </td>

            
            <td width="80%">
                <?php
                
                $section = isset($_GET['section']) ? $_GET['section'] : 'student';
                $page = isset($_GET['page']) ? $_GET['page'] : 'index';

                
                $path = './' . $section . '/' . $page . '.php';

                
                if (file_exists($path)) {
                    include($path);
                } else {
                    echo "<h1>Page not found</h1>";
                }
                ?>
            </td>
        </tr>

        <!-- Footer -->
        <tr height="100" style="background-color: lightgreen;">
            <td colspan="2">2025</td>
        </tr>
    </table>
</body>
</html>
