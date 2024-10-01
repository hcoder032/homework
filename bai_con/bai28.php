<?php
$thang = $nam = $ket_qua = '';

function nam_nhuan($nam) {
    // Kiểm tra năm nhuận
    if (($nam % 400 == 0) || ($nam % 4 == 0 && $nam % 100 != 0)) {
        return true;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $thang = intval($_POST["thang"]);
    $nam = intval($_POST["nam"]);

    // Kiểm tra số ngày trong tháng
    $so_ngay = cal_days_in_month(CAL_GREGORIAN, $thang, $nam);

    // Kiểm tra năm nhuận
    if (nam_nhuan($nam)) {
        $ket_qua = "Năm $nam là năm Nhuận và Tháng $thang năm $nam có $so_ngay ngày";
    } else {
        $ket_qua = "Tháng $thang năm $nam có $so_ngay ngày";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tính số ngày trong tháng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #FFE4B5, #FFA07A);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 450px;
        }
        h1 {
            font-size: 2em;
            text-align: center;
            margin-bottom: 10px;
            color: #FF6347;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .input-group label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 1em;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }
        input[type="text"]:focus {
            border: 1px solid #FF6347;
            box-shadow: 0px 0px 8px rgba(255, 99, 71, 0.3);
            outline: none;
        }
        input[type="submit"] {
            background-color: #FF6347;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #FF4500;
        }
        #ket_qua {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            resize: none;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính số ngày trong tháng</h1>
        <div class="input-group">
            <label for="thang">Tháng:</label>
            <input type="text" id="thang" name="thang" value="<?php echo $thang; ?>" placeholder="Nhập tháng (1-12)">
        </div>
        <div class="input-group">
            <label for="nam">Năm:</label>
            <input type="text" id="nam" name="nam" value="<?php echo $nam; ?>" placeholder="Nhập năm (VD: 2024)">
        </div>
        <input type="submit" value="Tính số ngày">
        <div class="input-group">
            <label for="ket_qua">Kết quả:</label>
            <input type="text" id="ket_qua" name="ket_qua" readonly value="<?php echo $ket_qua; ?>">
        </div>
        <div class="footer">© 2024 Lê Minh Hiếu</div>
    </form>
</body>
</html>
