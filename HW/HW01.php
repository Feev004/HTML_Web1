<html lang="en">

<head>
    <title>แบบฟอร์ม</title>
    <style>
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    td {
        padding: 12px;
    }
    form {
        margin-top: 30px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #89FFEB; /* หรือสีใดๆ ที่คุณต้องการ */
        margin: 0;
        padding: 0;
        color: #333; /* สีตัวอักษรในแบบฟอร์ม */
    }
    input[type="text"],
    textarea {
        color: #333; /* สีตัวอักษรใน input และ textarea */
    }
    form {
        /* ... */
        max-width: 600px; /* หรือขนาดที่คุณต้องการ */
    }
    </style>
</head>

<body>
<form method="get" action="HW01result.php">
        <table border="2" align="center" width="500">
            <tr>
                <td colspan="2" align="center"><big>แบบฟอร์ม</big></td>
            </tr>
            <tr>
                <td>ชื่อจริง :  </td>
                <td><input type="text" name="fName" size="20" value="" /> </td>

            </tr>
                <td>นามสกุล :  </td>
                <td><input type="text" name="lName" size="20" value="" /></td>

            </tr>
            </tr>
                <td>เบอร์โทร :  </td>
                <td><input type="text" name="pNum" size="20" value="" /></td>
            <tr>
                <td>วันเกิด : </td>
                <td><input type="date" name="birthday" required /></td>
            </tr>
            </tr>
            </tr>
                <td>งานอดิเรก :  </td>
                <td><input type="text" name="lWork" size="20" value="" /></td>
            </tr>
            <tr>
                <td>เพศ : </td>
                <td align="center">
                <select name="gender">
                    <option value="">-</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>ศาสนา : </td>
                <td align="center">
                    <select name="religion">
                        <option value="">-</option>
                        <option value="พุทธ">พุทธ</option>
                        <option value="คริสต์">คริสต์</option>
                        <option value="อิสลาม">อิสลาม</option>
                        <option value="ฮินดู">ฮินดู</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center">ที่อยู่:</td><td>
                    <textarea name="address" cols="50" rows="5"></textarea>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" ตกลง " />
                    <input type="reset" value=" ลบข้อมูล " />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>