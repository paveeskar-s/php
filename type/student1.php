
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
</head>
<body align="center">

    <?php
    $studentmarks=[
        "Muralee"=>[
            "maths"=>75,
            "physics"=>90,
            "chemistry"=>90
        ],
        "Kokin"=>[
            "maths"=>90,
            "physics"=>45,
            "chemistry"=>95
        ],
        "Tharan"=>[
            "maths"=>82,
            "physics"=>36,
            "chemistry"=>96
        ],
        "Piraba"=>[
            "maths"=>48,
            "physics"=>68,
            "chemistry"=>72
        ],
        "Shaka"=>[
            "maths"=>56,
            "physics"=>68,
            "chemistry"=>79
            ]

        ];
       // echo "<pre>";
       //print_r($studentsmarks);
       // echo "</pre>";

    function Total($marksArray) {
        return array_sum($marksArray);
    }

    function Color($marks) {
        if (is_int($marks)) {
            echo ($marks > 75) ? '<td style="color:red">' :
            (($marks > 65) ? '<td style="color:green">' :
            (($marks > 55) ? '<td style="color:yellow">' :
            (($marks > 45) ? '<td style="color:blue">' : '<td style="color:black">')));
            echo $marks;
            echo "</td>";
        }
    }

    echo '<table border="1" width="50%" align="center">
    <tr>
        <th>Student Name</th>
        <th>Maths</th>
        <th>Physics</th>
        <th>Chemistry</th>
        <th>Total</th>
        <th>Average</th>
        <th>Result</th>
    </tr>';

    foreach ($studentmarks as $name => $subjects) {
        $total = Total($subjects);
        $avg = round($total / count($subjects), 2);

        echo "<tr>";
        echo "<td>$name</td>";

        foreach ($subjects as $marks) {
            echo Color($marks);
        }

        echo "<td>$total</td>";
        echo "<td>$avg</td>";
        if ($avg > 75) {
            echo "<td>A</td>";
        } elseif ($avg > 65) {
            echo "<td>B</td>";
        } elseif ($avg > 55) {
            echo "<td>C</td>";
        } elseif ($avg > 35) {
            echo "<td>S</td>";
        } else {
            echo "<td>F</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
