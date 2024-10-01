<?php
$chuoi1 = $chuoi2 = $ket_qua = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chuoi1 = $_POST["chuoi1"];
    $chuoi2 = $_POST["chuoi2"];
    
    // So sánh hai chuỗi
    $kq = strcmp($chuoi1, $chuoi2);
    
    if ($kq == 0) {
        $ket_qua = "Hai chuỗi giống nhau";
    } elseif ($kq > 0) {
        $ket_qua = "Chuỗi thứ nhất dài hơn chuỗi thứ hai";
    } else {
        $ket_qua = "Chuỗi thứ nhất ngắn hơn chuỗi thứ hai";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>So sánh chuỗi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #E6E6FA, #D8BFD8);
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
            color: #9370DB;
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
            border: 1px solid #9370DB;
            box-shadow: 0px 0px 8px rgba(147, 112, 219, 0.3);
            outline: none;
        }
        input[type="submit"] {
            background-color: #9370DB;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #7B68EE;
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
        <h1>So sánh chuỗi</h1>
        <div class="input-group">
            <label for="chuoi1">Chuỗi thứ nhất:</label>
            <input type="text" id="chuoi1" name="chuoi1" value="<?php echo $chuoi1; ?>">
        </div>
        <div class="input-group">
            <label for="chuoi2">Chuỗi thứ hai:</label>
            <input type="text" id="chuoi2" name="chuoi2" value="<?php echo $chuoi2; ?>">
        </div>
        <input type="submit" value="So sánh">
        <div class="input-group">
            <label for="ket_qua">Kết quả:</label>
            <input type="text" id="ket_qua" name="ket_qua" readonly value="<?php echo $ket_qua; ?>">
        </div>
        <div class="footer">© 2024 Lê Minh Hiếu</div>
    </form>
</body>
</html>
