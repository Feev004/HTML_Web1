<html>
<head>
    <title>แสดงการสร้างและใช้งานอาร์เรย์ Numberic Array</title>
</head>
<body>
    <?php
    $MaxStudent = 10;
    for ($n = 0; $n < $MaxStudent; $n++) {
        $score[$n] = rand(50, 100);
    }
    echo '<center><font size="4" color="blue"> Grade Report </font></center>';
    echo '<table border="" align="center">';
    echo '<tr><td align="center" width="90">Student No.</td>';
    echo '<td align="center" width="90">Score</td>';
    echo '<td align="center" width="90">Grade</td></tr>';
    for ($n = 0; $n < $MaxStudent; $n++) {
        $grade = gpa($score[$n]);
        echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
        echo '<td align="center" width="90">' . $score[$n] . '</td>';
        echo '<td align="center" width="90">' . $grade . '</td></tr>';
    }

    echo '<tr><td colspan="3" align="center"> Average Score : ';
    echo average($score, $MaxStudent);
    echo '</td></tr></table>';

    function average($data, $max) {
        $total = 0;
        for ($n = 0; $n < $max; $n++) {
            $total += $data[$n];
        }
        return ($total / $max);
    }

    function gpa($score) {
        $grade = "";
        if ($score >= 80) {
            $grade = "A";
        } else if ($score >= 75) {
            $grade = "B+";
        } else if ($score >= 70) {
            $grade = "B";
        } else if ($score >= 65) {
            $grade = "C+";
        } else if ($score >= 60) {
            $grade = "C";
        } else if ($score >= 55) {
            $grade = "D+";
        } else if ($score >= 50) {
            $grade = "D";
        } else if ($score < 50) {
            $grade = "F";
        }
        return ($grade);
    }
    ?>
</body>
</html>
