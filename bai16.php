
<?php
$bd = $kt = $tong = $tich = $tongChan = $tongLe = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bd = $_POST["bd"];
    $kt = $_POST["kt"];
    $tong = 0;
    $tich = 1;
    $tongChan = 0;
    $tongLe = 0;
    for ($i = $bd; $i <= $kt; $i++) {
        $tong += $i;
        $tich *= $i;
        if ($i % 2 == 0) {
            $tongChan += $i;
        } else {
            $tongLe += $i;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tính dãy số</title>
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
        #tong, #tich, #tongChan, #tongLe {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính dãy số</h1>
        <div class="input-group">
            <label for="bd">Số bắt đầu:</label>
            <input type="text" id="bd" name="bd" value="<?php echo $bd; ?>">
        </div>
        <div class="input-group">
            <label for="kt">Số kết thúc:</label>
            <input type="text" id="kt" name="kt" value="<?php echo $kt; ?>">
        </div>
        <div class="input-group">
            <label for="tong">Tổng:</label>
            <input type="text" id="tong" name="tong" readonly value="<?php echo $tong; ?>">
        </div>
        <div class="input-group">
            <label for="tich">Tích:</label>
            <input type="text" id="tich" name="tich" readonly value="<?php echo $tich; ?>">
        </div>
        <div class="input-group">
            <label for="tongChan">Tổng chẵn:</label>
            <input type="text" id="tongChan" name="tongChan" readonly value="<?php echo $tongChan; ?>">
        </div>
        <div class="input-group">
            <label for="tongLe">Tổng lẻ:</label>
            <input type="text" id="tongLe" name="tongLe" readonly value="<?php echo $tongLe; ?>">
        </div>
        <input type="submit" value="Tính toán">
    </form>
</body>
</html>