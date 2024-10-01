<?php
$dienTich = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chieuDai = $_POST["chieuDai"];
    $chieuRong = $_POST["chieuRong"];
    $dienTich = $chieuDai * $chieuRong;
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
        #dienTich {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Diện tích hình chữ nhật</h1>
        <div class="input-group">
            <label for="chieuDai">Chiều dài:</label>
            <input type="text" id="chieuDai" name="chieuDai">
        </div>
        <div class="input-group">
            <label for="chieuRong">Chiều rộng:</label>
            <input type="text" id="chieuRong" name="chieuRong">
        </div>
        <div class="input-group">
            <label for="dienTich">Diện tích:</label>
       
            <input type="text" id="dienTich" name="dienTich" readonly value="<?php echo $dienTich; ?>">
        </div>
        <input type="submit" value="Tính">
    </form>
</body>
</html>