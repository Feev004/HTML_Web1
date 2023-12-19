<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "รัฐศาสตร์";
    $sur_name = "รจนัย";
    $tag = "6506021612013";
    $home = "หอพักชาย";
    $myphone = "0957513508";
    $group = "Faculty of Industrial Technology and Management";
    $Department = "IT";
    $course = "62062014 : Information Technology branch";
    echo $tag,"\t";
    echo $name,"\t";
    echo $sur_name;
    echo "<br>";
    echo "พักอยู่ที่",$home;
    echo "<br>";
    echo "เบอร์โทรศัพท์ ",$myphone;
    echo "<br>";
    echo "คณะ : ", $group;
    echo "<br>";
    echo "ภาควิชาเรียน : ", $Department;
    echo "<br>";
    echo "หลักสูตร : ", $course;
    ?>
</body>
</html>