<?php
$tienThanhToan = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gioBatDau = $_POST["gioBatDau"];
    $gioKetThuc = $_POST["gioKetThuc"];
    if ($gioBatDau < $gioKetThuc) {
        if ($gioBatDau <= 17 && $gioKetThuc <= 17) {
            $tienThanhToan = ($gioKetThuc - $gioBatDau) * 20000;
        } elseif ($gioBatDau >= 17) {
            $tienThanhToan = ($gioKetThuc - $gioBatDau) * 45000;
        } else {
            $tienThanhToan = (17 - $gioBatDau) * 20000 + ($gioKetThuc - 17) * 45000;
        }
    } else {
        $tienThanhToan = "Giờ kết thúc phải > giờ bắt đầu";
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
        #tienThanhToan {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính tiền karaoke</h1>
        <div class="input-group">
            <label for="gioBatDau">Giờ bắt đầu (h):</label>
            <input type="text" id="gioBatDau" name="gioBatDau">
        </div>
        <div class="input-group">
            <label for="gioKetThuc">Giờ kết thúc (h):</label>
            <input type="text" id="gioKetThuc" name="gioKetThuc">
        </div>
        <div class="input-group">
            <label for="tienThanhToan">Tiền thanh toán (VND):</label>
            <input type="text" id="tienThanhToan" name="tienThanhToan" readonly  value="<?php echo $tienThanhToan; ?>">
        </div>
        <input type="submit" value="Tính tiền">
    </form>
</body>
</html>