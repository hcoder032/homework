<?php
$thanhTien = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chiSoCu = $_POST["chiSoCu"];
    $chiSoMoi = $_POST["chiSoMoi"];
    $donGia = $_POST["donGia"];
    $thanhTien = ($chiSoMoi - $chiSoCu) * $donGia;

   
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
        #thanhTien {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính tiền điện</h1>
        <div class="input-group">
            <label for="tenChuHo">Tên chủ hộ:</label>
            <input type="text" id="tenChuHo" name="tenChuHo">
        </div>
        <div class="input-group">
            <label for="chiSoCu">Chỉ số cũ (Kw):</label>
            <input type="text" id="chiSoCu" name="chiSoCu">
        </div>
        <div class="input-group">
            <label for="chiSoMoi">Chỉ số mới (Kw):</label>
            <input type="text" id="chiSoMoi" name="chiSoMoi">
        </div>
        <div class="input-group">
            <label for="donGia">Đơn giá (VND):</label>
            <input type="text" id="donGia" name="donGia" value="2000">
        </div>
        <div class="input-group">
            <label for="thanhTien">Số tiền thanh toán (VND):</label>
            <input type="text" id="thanhTien" name="thanhTien" readonly  value="<?php echo $thanhTien; ?>">
        </div>
        <input type="submit" value="Tính">
    </form>
</body>
</html>