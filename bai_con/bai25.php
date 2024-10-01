<?php
$chuoi = $tu_tim = $ket_qua = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chuoi = $_POST["chuoi"];
    $tu_tim = $_POST["tu_tim"];
    
    // Tìm kiếm từ trong chuỗi
    $kq = strpos($chuoi, $tu_tim);
    
    if ($kq !== false) {
        $ket_qua = "Tìm thấy từ '$tu_tim' trong chuỗi tại vị trí số " . ($kq + 1);
    } else {
        $ket_qua = "Không tìm thấy từ '$tu_tim' trong chuỗi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tìm kiếm chuỗi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ADD8E6, #87CEEB);
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
        textarea, input[type="text"], input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 1em;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }
        textarea:focus, input[type="text"]:focus {
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
        #ket_qua {
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
        <h1>Tìm kiếm chuỗi</h1>
        <div class="input-group">
            <label for="chuoi">Chuỗi gốc:</label>
            <textarea id="chuoi" name="chuoi" rows="4"><?php echo $chuoi; ?></textarea>
        </div>
        <div class="input-group">
            <label for="tu_tim">Từ cần tìm:</label>
            <input type="text" id="tu_tim" name="tu_tim" value="<?php echo $tu_tim; ?>">
        </div>
        <input type="submit" value="Tìm kiếm">
        <div class="input-group">
            <label for="ket_qua">Kết quả:</label>
            <textarea id="ket_qua" name="ket_qua" rows="2" readonly><?php echo $ket_qua; ?></textarea>
        </div>
        <div class="footer">© 2024 Le Minh Hieu</div>
    </form>
</body>
</html>
