<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
<?
$hostname = "localhost";
$username = "root";
$password = "mysql201";
$dbname = "bookstore";
$conn = mysql_connect( $hostname, $username, $password );
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysql_select_db ( $dbname, $conn )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
$sql = "DELETE FROM book WHERE BookID = '$id' ";
mysql_query($sql) or die ( "DELETE จาตาราง book มีข้อผิดพลาดเกิดขึ้น".mysql_error());
mysql_close ( $conn );
header("Location:listofbook.php");
?>
</body>
</html>