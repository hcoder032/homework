<?php
$tongDiem = '';
$ketQuaThi = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toan = $_POST["toan"];
    $ly = $_POST["ly"];
    $hoa = $_POST["hoa"];
    $diemChuan = $_POST["diemChuan"];
    $tongDiem = $toan + $ly + $hoa;

    if ($toan > 0 && $ly > 0 && $hoa > 0 && $tongDiem >= $diemChuan) {
        $ketQuaThi = "Đậu";
    } else {
        $ketQuaThi = "Rớt";
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
        #tongDiem, #ketQuaThi {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Kết quả thi</h1>
        <div class="input-group">
            <label for="toan">Điểm Toán:</label>
            <input type="text" id="toan" name="toan">
        </div>
        <div class="input-group">
            <label for="ly">Điểm Lý:</label>
            <input type="text" id="ly" name="ly">
        </div>
        <div class="input-group">
            <label for="hoa">Điểm Hóa:</label>
            <input type="text" id="hoa" name="hoa">
        </div>
        <div class="input-group">
            <label for="diemChuan">Điểm chuẩn:</label>
            <input type="text" id="diemChuan" name="diemChuan">
        </div>
        <div class="input-group">
            <label for="tongDiem">Tổng điểm:</label>
            <input type="text" id="tongDiem" name="tongDiem" readonly  value="<?php echo $tongDiem; ?>">
        </div>
        <div class="input-group">
            <label for="ketQuaThi">Kết quả thi:</label>
            <input type="text" id="ketQuaThi" name="ketQuaThi" readonly  value="<?php echo $ketQuaThi; ?>">
        </div>
        <input type="submit" value="Xem kết quả">
    </form>
</body>
</html>