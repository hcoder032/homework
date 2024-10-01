<?php
$ngay = $thang = $nam = $ket_qua = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ngay = intval($_POST["ngay"]);
    $thang = intval($_POST["thang"]);
    $nam = intval($_POST["nam"]);
    
    // Lấy ngày hiện tại
    $ngay_hien_tai = date("d");
    $thang_hien_tai = date("m");
    $nam_hien_tai = date("Y");

    // Tính tuổi
    $tuoi = $nam_hien_tai - $nam;

    // Tính ngày sinh nhật trong năm hiện tại
    $ngay_sinh_nhat = mktime(0, 0, 0, $thang, $ngay, $nam_hien_tai);
    $ngay_hien_tai_thoi_gian = mktime(0, 0, 0, $thang_hien_tai, $ngay_hien_tai, $nam_hien_tai);
    
    // So sánh ngày sinh nhật và ngày hiện tại
    if ($ngay_sinh_nhat < $ngay_hien_tai_thoi_gian) {
        $diff_days = floor(($ngay_hien_tai_thoi_gian - $ngay_sinh_nhat) / (60 * 60 * 24));
        $ket_qua = "Ngày sinh nhật của bạn đã qua $diff_days ngày.";
    } elseif ($ngay_sinh_nhat > $ngay_hien_tai_thoi_gian) {
        $diff_days = floor(($ngay_sinh_nhat - $ngay_hien_tai_thoi_gian) / (60 * 60 * 24));
        $ket_qua = "Còn $diff_days ngày nữa là đến ngày sinh nhật của bạn.";
    } else {
        $ket_qua = "Chúc mừng sinh nhật!";
    }

    $ket_qua = "Năm nay bạn $tuoi tuổi. $ket_qua";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tính tuổi và ngày sinh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #FFD700, #FFA500);
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
            color: #FF8C00;
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
            border: 1px solid #FF8C00;
            box-shadow: 0px 0px 8px rgba(255, 140, 0, 0.3);
            outline: none;
        }
        input[type="submit"] {
            background-color: #FF8C00;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #FF7F50;
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
        <h1>Tính tuổi và ngày sinh</h1>
        <div class="input-group">
            <label for="ngay">Ngày sinh:</label>
            <input type="text" id="ngay" name="ngay" value="<?php echo $ngay; ?>" placeholder="Nhập ngày sinh (1-31)">
        </div>
        <div class="input-group">
            <label for="thang">Tháng sinh:</label>
            <input type="text" id="thang" name="thang" value="<?php echo $thang; ?>" placeholder="Nhập tháng sinh (1-12)">
        </div>
        <div class="input-group">
            <label for="nam">Năm sinh:</label>
            <input type="text" id="nam" name="nam" value="<?php echo $nam; ?>" placeholder="Nhập năm sinh (VD: 1990)">
        </div>
        <input type="submit" value="Thông báo">
        <div class="input-group">
            <label for="ket_qua">Kết quả:</label>
            <input type="text" id="ket_qua" name="ket_qua" readonly value="<?php echo $ket_qua; ?>">
        </div>
        <div class="footer">© 2024 Lê Minh Hiếu</div>
    </form>
</body>
</html>
