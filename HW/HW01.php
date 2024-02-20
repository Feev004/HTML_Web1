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
    <?php
    // ตรวจสอบว่ามีการส่งข้อมูลมาจากแบบฟอร์มหรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // ดึงข้อมูลจากแบบฟอร์ม
        $birthDate = isset($_GET["birthDate"]) ? $_GET["birthDate"] : "";
        
        // ตรวจสอบว่าวัน/เดือน/ปีเกิดไม่ว่างเปล่า
        if (!empty($birthDate)) {
            // แปลงวัน/เดือน/ปีเกิดเป็นวันที่ในรูปแบบ Y-m-d
            $birthDate = date("Y-m-d", strtotime($birthDate));
            
            // ดึงวันที่ปัจจุบัน
            $currentDate = date("Y-m-d");
            
            // คำนวณอายุ
            $age = date_diff(date_create($birthDate), date_create($currentDate))->y;
            
            // แสดงผล
            echo '<center>';
            echo '<br><h3>อายุของนักศึกษา</h3>';
            echo '<p>วัน/เดือน/ปีเกิด: ' . $birthDate . '</p>';
            echo '<p>อายุ: ' . $age . ' ปี</p>';
            echo '</center>';
        } else {
            // ถ้าไม่ได้กรอกวัน/เดือน/ปีเกิด
            echo '<center>';
            echo '<br><h3>กรุณากรอกวัน/เดือน/ปีเกิด</h3>';
            echo '</center>';
        }
    }
    ?>
</body>

</html>