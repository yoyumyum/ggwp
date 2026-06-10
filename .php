<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลประวัตินักเรียน</title>
    <style>
        body {
            font-family: 'Angsana New', 'Cordia New', sans-serif;
            font-size: 20px;
            line-height: 1.6;
            margin: 40px;
        }
        .profile-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 500px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="profile-box">
        <h2>ข้อมูลประวัตินักเรียน</h2>
        
        <?php
            $name = "นายฐิติวัชร์ เลิศทักษิณานนท์";
            $level = "มัธยมศึกษาปีที่ 6";
            $room = "6/8";
            $no = "29";
            $address = "1873 พระราม2 ซ.43 แขวงบางมด เขตจอมทอง กรุงเทพฯ 10150";
            $education = "จบชั้นประถมศึกษาจากโรงเรียนวัดบางปะกอก, จบชั้นมัธยมศึกษาตอนต้นจากโรงเรียนวัดบางปะกอก";

            echo "ชื่อ-สกุล: " . $name;
            echo "<br>"; 
            
            echo "เรียนอยู่ระดับชั้น: " . $level . " ห้องเรียน: " . $room;
            echo "<br>";
            
            echo "เลขที่: " . $no;
            echo "<br>";
            
            echo "ที่อยู่: " . $address;
            echo "<br>";
            
            echo "ประวัติการศึกษา: " . $education;
        ?>
    </div>

</body>
</html>