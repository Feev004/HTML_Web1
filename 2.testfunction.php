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
        echo "Result say : ", $result, "<br>";
    }
    function subtract($i, $j = 50){
        $result = $i + $j;
        echo "Result subtract : ", $result, "<br>";
    }
    function multiply($i, $j){
        $result = $i * $j;
        return $result;
    }
    function divide($n1, $n2, &$result){
        $result = $n1 / $n2;
    }

    $num1 = 10;
    $num2 = 20;
    $resultDivide = 0;
    Say($num1, $num2);
    subtract($num1);
    divide($num1, $num2, $resultDivide);
    $Resultmultiply = multiply($num1, $num2);
    echo "Result multiply : ", $Resultmultiply, "<br>";
    echo "Result divide : ", $resultDivide, "<br>";
    ?>
</body>
</html>