<html lang="en">

<head>
    <title>แบบฟอร์ม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3A3B3C;
            margin: 0;
            padding: 0;
        }

        form {
            margin-top: 30px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form method="get" action="Hw03result.php">
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