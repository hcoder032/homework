<?php
$ho_ten = $ho = $ten_dem = $ten = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ho_ten = trim($_POST["ho_ten"]);
    
    // Tách chuỗi họ tên
    $mang = explode(" ", $ho_ten);
    
    // Họ là phần tử đầu tiên
    $ho = $mang[0];

    // Tên là phần tử cuối cùng
    $ten = $mang[count($mang) - 1];

    // Tên đệm là các phần tử còn lại
    $ten_dem = '';
    for ($i = 1; $i < count($mang) - 1; $i++) {
        $ten_dem .= $mang[$i] . " ";
    }
    $ten_dem = trim($ten_dem); // Xóa khoảng trắng dư thừa
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tách họ và tên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #87CEEB, #00BFFF);
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
            color: #4682B4;
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
            border: 1px solid #4682B4;
            box-shadow: 0px 0px 8px rgba(70, 130, 180, 0.3);
            outline: none;
        }
        input[type="submit"] {
            background-color: #4682B4;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #4169E1;
        }
        #ho, #ten_dem, #ten {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
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
        <h1>Tách họ và tên</h1>
        <div class="input-group">
            <label for="ho_ten">Họ và tên:</label>
            <input type="text" id="ho_ten" name="ho_ten" value="<?php echo $ho_ten; ?>">
        </div>
        <input type="submit" value="Tách Họ Tên">
        <div class="input-group">
            <label for="ho">Họ:</label>
            <input type="text" id="ho" name="ho" readonly value="<?php echo $ho; ?>">
        </div>
        <div class="input-group">
            <label for="ten_dem">Tên đệm:</label>
            <input type="text" id="ten_dem" name="ten_dem" readonly value="<?php echo $ten_dem; ?>">
        </div>
        <div class="input-group">
            <label for="ten">Tên:</label>
            <input type="text" id="ten" name="ten" readonly value="<?php echo $ten; ?>">
        </div>
        <div class="footer">© 2024 Lê Minh Hiếu</div>
    </form>
</body>
</html>
