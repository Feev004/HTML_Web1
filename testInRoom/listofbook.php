<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
<?
$hostname = "localhost";
$username = "root";
$password = "mysql2012";
$dbname = "bookstore";
$conn = mysql_connect( $hostname, $username, $password );
if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysql_select_db ( $dbname, $conn )or die ( "ไม่สามารถเลือกฐานข้อมูล school ได้" );
mysql_query("SET character_set_results=tis620");
mysql_query("SET character_set_client=tis620");
mysql_query("SET character_set_connection=tis620");
$sqltxt = "SELECT * FROM book order by BookID";
$result = mysql_query ( $sqltxt, $conn );
echo "<CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" ";
echo "align = \"center\" valign = \"top\" >";
echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
echo "<td width =\"30\" align=\"center\">ล าดับ</font></td>";
echo "<td width =\"100\" align=\"center\" >รหัสหนังสือ</td>";
echo "<td align=\"center\" width = \"200\">ชื่อหนังสือ</td>";
echo "<td align=\"center\" width =\"80\" >ลบ</a></font></td>\n</b>";
$a=1;
while ( $rs = mysql_fetch_array ( $result ) )
{
echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
echo "<td align=\"center\"> ";
echo "<a href=\"detailbook.php?id=$rs[0]\">$rs[0]</a></td>";
echo "<td align=\"center\">$rs[1]</td>";
echo "<td align=\"center\"> <a href=\"deletebook.php?id=$rs[0]\" ";
echo "onclick=\"return confirm(' ยืนยันการลบข้อมูลหนังสือ $rs[1] ')\">[ลบ] ";
echo "</a></font></td>\n";
$a++;
}
?>
</tr></table><BR><BR>
<div align = "center"> <A HREF="addbook.php">เพิ่มรายการหนังสือ</A></div><BR>
<?
mysql_close ( $conn );
?>
</body>
</html>