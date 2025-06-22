<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops and Table</title>
</head>
<body>

<?php

$marks = array(10, 20, 30);

// Display first value
echo $marks[0] . "<br>";

// For loop
for ($x = 0; $x < count($marks); $x++) {
    echo $marks[$x] . "<br>";
}

// While loop
$x = 0;
while ($x < count($marks)) {
    echo $marks[$x] . "<br>";
    $x++;
}

// Do...while loop
$x = 0;
do {
    echo $marks[$x] . "<br>";
    $x++;
} while ($x < count($marks));

// Multiplication table (16x16)
echo '<table border="1" width="100%">';

for ($b = 1; $b <= 16; $b++) {
    echo "<tr>";
    for ($c = 1; $c <= 16; $c++) {
        $z = $b * $c;

        // Alternate red cell for even values
        if ($z % 2 == 1) {
            echo '<td style="background:red">';
        } else {
            echo '<td>';
        }

        echo $z;
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
