<!DOCTYPE html>
<html lang="en">
<head>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&family=Srisakdi:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Noto Sans Thai Looped", sans-serif;
            font-weight: 700;
            font-style: normal;
                
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 1 </title>
</head>
<body>
    <h1>โปรแกรม ภาษา HTML</h1>
    664485038 นายธิติวุฒิ ศิริทรัพย์ <br>
    หมู่เรียน66/96 <br>
        <?php    
        // ทดสอบภาษา comment php
        echo'<h2>สวัสดัปีใหม่</h2>';
        echo'<br>ขอให้ทุกคนประสบแต่ความสุข';
        // สร้างตัวแปร
        $name='ธิติวุฒิ';
        $surname='ศิริทรัพย์';
        echo'<br>ชื่อของคุณคือ'.$name."".$surname;
        $x=15;
        $y=7;
        $z=$x+$y;
        echo'<br>ค่าผลบวก=' .$z;
        $z=$x*$y;
        echo'<br>ค่าผลคูณ='.$z;

        
        
        ?>
</body>
</html>
