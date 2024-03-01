<?php
session_start();
session_destroy();
?>
<form action="session_file2.php">
กรุณาป้อนชื่อผู้ใช้ (username) แล้วคลิกปุ่ม OK<br><br>
<input type="text" name="username"><br><br>
กรุณาป้อนชื่อผู้ใช้ (password) แล้วคลิกปุ่ม OK<br><br>

<input type="text" name="password">
<input type="submit" value=" OK ">
</form>