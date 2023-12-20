<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcurate</title>
    <link rel="stylesheet" href="calcurate.css">
</head>
<body>   
    <?php
    $width = 5;
    $height = 10;
    $sum = $width * $height;
    ?>   
        <table border="1" align="center" width="400">
        <tr>
        <td colspan="2" align="center">
        <big>calcurate</big>
        </td>
        <tr>
        <tr>
        <td align="right">ความกว้าง</td>
        <td><input type="text" name="row" size="15" value="<?php echo $width; ?>"/> </td>
        </tr>
        <td align="right">ความยาว</td>
        <td><input type="text" name="column" size="15" value="<?php echo $height?>"/></td>
        </tr>
        <td align="right">พื้นที่สี่เหลี่ยม</td>
        <td><input type="text" name="column" size="15" value="<?php echo $sum?>"/></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <div><a href="index.php">profile</a></div>
        </td>
        </tr>
        </table>
</body>
</html>