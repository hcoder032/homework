<?php
$chuoi = $tu_goc = $tu_thay = $chuoi_kq = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chuoi = $_POST["chuoi"];
    $tu_goc = $_POST["tu_goc"];
    $tu_thay = $_POST["tu_thay"];
    
    // Thay thế từ gốc bằng từ thay thế trong chuỗi
    $chuoi_kq = str_replace($tu_goc, $tu_thay, $chuoi);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thay thế từ trong chuỗi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #FFA500, #FF6347);
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
        textarea, input[type="text"], input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 1em;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }
        textarea:focus, input[type="text"]:focus {
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
        #chuoi_kq {
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
        <h1>Thay thế từ trong chuỗi</h1>
        <div class="input-group">
            <label for="chuoi">Chuỗi gốc:</label>
            <textarea id="chuoi" name="chuoi" rows="4"><?php echo $chuoi; ?></textarea>
        </div>
        <div class="input-group">
            <label for="tu_goc">Từ gốc:</label>
            <input type="text" id="tu_goc" name="tu_goc" value="<?php echo $tu_goc; ?>">
        </div>
        <div class="input-group">
            <label for="tu_thay">Từ thay thế:</label>
            <input type="text" id="tu_thay" name="tu_thay" value="<?php echo $tu_thay; ?>">
        </div>
        <input type="submit" value="Thay thế">
        <div class="input-group">
            <label for="chuoi_kq">Chuỗi sau khi thay thế:</label>
            <textarea id="chuoi_kq" name="chuoi_kq" rows="4" readonly><?php echo $chuoi_kq; ?></textarea>
        </div>
        <div class="footer">© 2024 Your Company</div>
    </form>
</body>
</html>
