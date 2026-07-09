<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include "action/connect.php";
        //       ดึง   ทั้งหมด จาก ตาราง orders
        $sql = "SELECT * FROM orders";
        //                      db.  คำสั่ง
        $result = mysqli_query($con, $sql);
        // ทดสอบตัวแปร
        // var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>รหัสรายการ</th>
            <th>ชื่อผู้เข้าพัก</th>
            <th>ชำระเงิน</th>
            <th>ประเภท</th>
            <th>ห้อง</th>
            <th>ภาพ</th>
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["order_id"] ?></td>
                    <td><?= $order["name_id"] ?></td>
                    <td><?= $order["payment"] ?></td>
                    <td><?= $order["usage_type"] ?></td>
                    <td><?= $order["room_id"] ?></td>
                    <td>
                        <img 
                            src="<?= $order["image"] ?>"
                            style="width:200px"
                        >
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
    <a href="room.php">ไปหน้า room</a>

</body>
</html>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Tahoma, sans-serif;
}

body{
    background:#f3f3f3;
    padding:30px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

thead{
    background:#222;
    color:#fff;
}

thead th{
    padding:15px;
    font-size:16px;
    letter-spacing:1px;
}

tbody td{
    padding:15px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tbody tr:hover{
    background:#f8f5ef;
    transition:.2s;
}

img{
    width:200px;
    border-radius:8px;
    border:2px solid #b08d57;
}
</style>