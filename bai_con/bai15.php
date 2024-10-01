<?php
$soNgay = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $thang = $_POST["thang"];
    $nam = $_POST["nam"];
    switch ($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $soNgay = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $soNgay = 30;
            break;
        case 2:
            if ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0)) {
                $soNgay = 29;
            } else {
                $soNgay = 28;
            }
            break;
        default:
            $soNgay = "Tháng không hợp lệ";
            break;
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
        #soNgay {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính số ngày trong tháng</h1>
        <div class="input-group">
            <label for="thang">Tháng:</label>
            <input type="text" id="thang" name="thang">
        </div>
        <div class="input-group">
            <label for="nam">Năm:</label>
            <input type="text" id="nam" name="nam">
        </div>
        <div class="input-group">
            <label for="soNgay">Số ngày:</label>
            <input type="text" id="soNgay" name="soNgay" readonly  value="<?php echo $soNgay; ?>">
        </div>
        <input type="submit" value="Tính số ngày">
    </form>
</body>
</html>