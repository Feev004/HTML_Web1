<html>
<head><title>bookList1.php</title></head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bookStore";
$conn = mysqli_connect($hostname, $username, $password);
if (!$conn)
die("ไม่สามารถติดต่อกับ MySQL ได้");
mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore

ได้");

mysqli_query($conn,"set character_set_connection=utf8mb4");
mysqli_query($conn,"set character_set_client=utf8mb4");
mysqli_query($conn,"set character_set_results=utf8mb4");
$sql = "SELECT book.*, typebook.TypeName, statusbook.StatusName FROM book 
INNER JOIN typebook ON book.TypeID = typebook.typeID
INNER JOIN statusbook ON book.StatusId = statusbook.statusId
order by book.BookId";
$result = mysqli_query ($conn, $sql);
echo '<center>';
echo '<br><h3>รายชื่อหนังสือ</h3>';
echo '<table width="500" border="0">';


echo '</table>';
echo '<br><table width="500" border="1">';
echo '<tr bgcolor="">';
echo '<th width ="50" >ลำดับ</th>';
echo '<th width ="100">รหัสหนังสือ</th>';
echo '<th width = "200">ชื่อหนังสือ</th>';
echo '<th width = "200">รหัสประเภทหนังสือ</th>';
echo '<th width = "200">รหัสสถานะหนังสือ</th>';
echo '<th width = "200">สำนักพิมพ์</th>';
echo '<th width = "200">ราคาซื้อ</th>';
echo '<th width = "200">ราคาเช่า</th>';
echo '<th width = "200">จำนวนวันที่เช่า</th>';

echo '<th width = "200">รูปหนังสือ</th>';
echo '<th width = "500">วันที่ยืม</th>';
$row=1;
while ($rs = mysqli_fetch_array($result))
{
echo '<tr align="center" bgcolor="">';
echo '<td>'.$row.'</td>';
echo '<td><a

href="bookDetail1_edit.php?BookID='.$rs['BookID'].'">'.$rs['BookID'].'</a></td>';
echo '<td align="left">'.$rs['BookName'].'</td>';
echo '<td align="left">'.$rs['TypeName'].'</td>';
echo '<td align="left">'.$rs['StatusName'].'</td>';
echo '<td align="left">'.$rs['Publish'].'</td>';
echo '<td align="left">'.$rs['UnitPrice'].'</td>';
echo '<td align="left">'.$rs['UnitRent'].'</td>';
echo '<td align="left">'.$rs['DayAmount'].'</td>';
echo '<td align="left">'.$rs['Picture'].'</td>';
echo '<td align="left">'.$rs['BookDate'].'</td>';





echo '</tr>';
$row++;
}
echo '</table>';
mysqli_close ( $conn );
echo '<br><br><a href="bookmenu.php">Back to menu</a>';
echo '</center>';
?>
</body>
</html>