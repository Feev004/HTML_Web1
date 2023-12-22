<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php
    function Say($i, $j){
        $result = $i + $j;
        echo "result : ", $result, "<br>";
    }
    function subtract($i, $j = 50){
        $result = $i + $j;
        echo "result : ", $result, "<br>";
    }

    $num1 = 10;
    $num2 = 20;
    Say($num1, $num2);
    subtract($num1);
    ?>
</body>
</html>