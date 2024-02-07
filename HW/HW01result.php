<html lang="en">

    <head>
        <title>แบบฟอร์ม</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5CCAFE;
            margin: 0;
            padding: 0;
        }

        table {
            margin-top: 30px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        table, th, td {
            border: 1px solid #ddd;
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #FF0000;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    </head>

    <body>
        <?php
            $fName = $_GET['fName'];
            $lName = $_GET['lName'];
            $gender = $_GET['gender'];
            $religion = $_GET['religion'];
            $address = $_GET['address'];
            $pNum = $_GET['pNum'];
            $lWork = $_GET['lWork'];
            echo "<table align='center' width='20%' border='1'>";
            echo "<tr><td colspan='2' align='center'><b>แบบฟอร์ม</b></td></tr>";
            echo "<tr><td>ชื่อจริง :</td><td align='center'> <i> $fName </i>
</td></tr>";

            echo "<tr><td>นามสกุล :</td><td align='center'> <i> $lName </i>

</td></tr>";
            echo "<tr><td>เบอร์โทร:</td><td align='center'> <i> $pNum </i>

</td></tr>";
            echo "<tr><td>งานอดิเรก :</td><td align='center'> <i> $lWork </i>
</td></tr>";

            echo "<tr><td>เพศ :</td><td align='center'> <i> $gender </i>

</td></tr>";

            echo "<tr><td>ศาสนา :</td><td align='center'> <i> $religion </i>

</td></tr>";
            echo "<tr><td>ที่อยู่:</td><td align='center'> <i> $address</i>

</td></tr>";

            echo "</table>"
        ?>
        <center><a href="HW01.php"> กลับ </a></center>
    </body>

</html>