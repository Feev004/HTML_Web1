<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงการใช้งาน for</title>
</head>
<body>
<?php
    $sumOdd = 0;
    $sumEven = 0;
    for($num = 1 ; $num <= 10 ; $num++){
        if($num % 2 == 0){
            $sumEven += $num;
        }
        else $sumOdd += $num;
    }
    echo "Even = $sumEven , Odd = $sumOdd";
    ?>
</body>
</html>