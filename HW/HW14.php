<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th:first-child {
        width: 50px;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    table {
        margin-top: 30px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    table, th, td {
        border: 1px solid #ddd;
        width: 50px;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e0e0e0;
    }

    th:first-child {
        width: 50px; 
    }
    </style>
</head>
<body>
    <?php
    $number = 10;
    $maxCol = 5 ;
    for ( $r = 0; $r < $number ; $r++ ) {
        for ( $c = 0; $c < $maxCol ; $c++ ) {
            // ถ้าเป็นช่อง "number" ให้ใส่ลำดับ 1-10
            if ($c == 0) {
                $score[ $r ][ $c ] = $r + 1;
            } else {
                // ถ้าเป็นช่อง Homework ให้ random คะแนนตั้งแต่ 0-10
                if ($c == 1) {
                    $score[ $r ][ $c ] = rand( 0, 10);
                } elseif ($c == 2) {
                    // ถ้าเป็นช่อง Assignment ให้ random คะแนนตั้งแต่ 0-20
                    $score[ $r ][ $c ] = rand( 0, 20);
                } elseif ($c == 3) {
                    // ถ้าเป็นช่อง Midterm ให้ random คะแนนตั้งแต่ 0-35
                    $score[ $r ][ $c ] = rand( 0, 35);
                } elseif ($c == 4) {
                    // ถ้าเป็นช่อง Final ให้ random คะแนนตั้งแต่ 0-35
                    $score[ $r ][ $c ] = rand( 0, 35);
                }
            }
        }
        // คำนวณคะแนนรวม
        $score[$r][$maxCol] = array_sum(array_slice($score[$r], 1, $maxCol - 1));
    }

    echo "<table border='1' align='center' width='100%'>";
    echo "<tr><td width='80' align='center'>number</td>";//1-10 number
    echo "<td width='80' align='center'>Homework</td>";//10 point
    echo "<td width='80' align='center'>Assignment</td>";//20 point
    echo "<td width='80' align='center'>Midterm</td>";//35 point
    echo "<td width='80' align='center'>Final</td>";//35 point
    echo "<td width='80' align='center'>Total score</td></tr>";//100 point

    for ( $r = 0; $r < $number ; $r++ ) {
        echo "<tr>";
        for ( $c = 0; $c < $maxCol + 1 ; $c++ ) {
            echo "<td align='center'>" . $score[$r][$c] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
