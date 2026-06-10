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
            // กำหนดข้อมูลในตัวแปร (ให้นักเรียนแก้ไขข้อมูลในเครื่องหมาย " " ได้เลย)
            $name = "นายสมชาย ใจดี";
            $level = "มัธยมศึกษาปีที่ 6";
            $room = "6/1";
            $no = "15";
            $address = "123/4 ถนนสุขุมวิท แขวงคลองเตย เขตคลองเตย กรุงเทพมหานคร 10110";
            $education = "จบชั้นประถมศึกษาจากโรงเรียนเอ บี ซี, จบชั้นมัธยมศึกษาตอนต้นจากโรงเรียนเดิม";

            // แสดงผลข้อมูล และใช้คำสั่งภาษา PHP ร่วมกับ <br> ของ HTML เพื่อขึ้นบรรทัดใหม่
            echo "ชื่อ-สกุล: " . $name;
            echo "<br>"; // คำสั่งขึ้นบรรทัดใหม่ด้วย PHP
            
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