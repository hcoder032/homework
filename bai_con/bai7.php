<?php
$diemTB = '';
$ketQua = '';
$xepLoai = '';
$hk1 ='';
$hk2 ='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hk1 = $_POST["hk1"];
    $hk2 = $_POST["hk2"];
    $diemTB = ($hk1 + $hk2 * 2) / 3;

    if ($diemTB >= 5) {
        $ketQua = "Được lên lớp";
    } else {
        $ketQua = "Ở lại lớp";
    }

    if ($diemTB >= 8) {
        $xepLoai = "Giỏi";
    } elseif ($diemTB >= 6.5) {
        $xepLoai = "Khá";
    } elseif ($diemTB >= 5) {
        $xepLoai = "Trung bình";
    } else {
        $xepLoai = "Yếu";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFA500;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #FFFF00;
            padding: 20px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        h1 {
            font-size: 2em;
            text-align: center;
        }
        .input-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .input-group label {
            margin-right: 10px;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
        }
        #diemTB, #ketQua, #xepLoai {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Kết quả học tập</h1>
        <div class="input-group">
            <label for="hk1">Điểm HK1:</label>
            <input type="text" id="hk1" name="hk1" value="<?php echo $hk1; ?>">
        </div>
        <div class="input-group">
            <label for="hk2">Điểm HK2:</label>
            <input type="text" id="hk2" name="hk2" value="<?php echo $hk2; ?>">
        </div>
        <div class="input-group">
            <label for="diemTB">Điểm trung bình:</label>
            <input type="text" id="diemTB" name="diemTB" readonly  value="<?php echo $diemTB; ?>">
        </div>
        <div class="input-group">
            <label for="ketQua">Kết quả:</label>
            <input type="text" id="ketQua" name="ketQua" readonly  value="<?php echo $ketQua; ?>">
        </div>
        <div class="input-group">
            <label for="xepLoai">Xếp loại:</label>
            <input type="text" id="xepLoai" name="xepLoai" readonly  value="<?php echo $xepLoai; ?>">
        </div>
        <input type="submit" value="Xem kết quả">
    </form>
</body>
</html>