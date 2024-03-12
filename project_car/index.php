<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/1.css">
</head>
<body>
    
    <h1>Carsale</h1>
    <a href="index.php">login</a>ติดต่อ
    <center>
    <table border='1' width='300'>
        <tr><td colspan='2' align='center'>เป็นสมาชิกหรือยัง?</td></tr>
        <tr><td colspan='2' align='center'><a href="createuser.php"><input type="submit" value=" สมัครสมาชิก "></td></tr>
    </table>
    <form action="checklogin.php" method = "post">
    <table border='1' width='300'>
        <tr><td colspan='2' align='center'>login</td></tr>
        <tr><td>Username :</td> <td><input type="text" name="Username"></td></td>
        <tr><td>Password :</td> <td><input type="password" name="Password"></td></td>
        <tr><td colspan='2' align='center'><input type="submit" value=" Submit ">
        <br><a href="">ลืมรหัส?</a></td></tr>
    </table></center></form>
</body>
</html>