<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงการใช้งาน while</title>
</head>
<body>
<?php
    $num = 1;
    $sumOdd = 0;
    do{
        if ($num % 2 != 0) {
            echo "$num is Odd Number <br>";
            $sumOdd += $num;
            
        }
        $num++;
        
    }
    while ($num < 10);
    echo "Sum of Odd Numbers: $sumOdd<br>";
    ?>
</body>
</html>