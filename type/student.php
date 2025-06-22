<?php

$students = [
    "Mathi" => [
        "Maths" => 75,
        "Physics" => 90,
        "Chemistry" => 40
    ],
    "kokini" => [
        "Maths" => 90,
        "Physics" => 45,
        "Chemistry" => 75
    ],
    "Thuva" => [
        "Maths" => 82,  
        "Physics" => 30,
        "Chemistry" => 96
    ],
    "Praba" => [
        "Maths" => 48,
        "Physics" => 68,
        "Chemistry" => 72
    ],
    "Shan" => [
        "Maths" => 56,
        "Physics" => 68,
        "Chemistry" => 79
    ]
];

echo "<pre>";
print_r($students);
echo "</pre>";

function getGrade($avg) {
    $grade = '';

    if ($avg >= 75) {
        $grade = 'A';

    } elseif ($avg >= 65) {
        $grade = 'B';
    
    } elseif ($avg >= 55) {
        $grade = 'C';
    
    } elseif ($avg >= 45) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    return [$grade];
}

echo "<table border='1'>";
echo "<tr>
        <th>Student</th>
        <th>Maths</th>
        <th>Physics</th>
        <th>Chemistry</th>
        <th>Total</th>
        <th>Average</th>
        <th>Grade</th>
      </tr>";

foreach ($students as $name => $marks) {
    $maths = $marks['Maths'];
    $physics = $marks['Physics'];
    $chemistry = $marks['Chemistry'];

    $total = $maths + $physics + $chemistry;
    $avg = round($total / 3,2 );

    list($grade) = getGrade($avg);

    $mathsColor = ($maths >= 75) ? 'red' : (($maths >= 65) ? 'green' : (($maths >= 50) ? 'yellow' : 'black'));
    $physicsColor = ($physics >= 75) ? 'red' : (($physics >= 65) ? 'green' : (($physics >= 50) ? 'yellow' : 'black'));
    $chemColor = ($chemistry >= 75) ? 'red' : (($chemistry >= 65) ? 'green' : (($chemistry >= 50) ? 'yellow' : 'black'));

    echo "<tr>
            <td>$name</td>
            <td style='color:$mathsColor;'>$maths</td>
            <td style='color:$physicsColor;'>$physics</td>
            <td style='color:$chemColor;'>$chemistry</td>
            <td>$total</td>
            <td>$avg</td>
            <td><b>$grade</b></td>
          </tr>";
}

echo "</table>";
?>
