<?php
$namAmLich = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nam = $_POST["nam"];
    $can = array("Qúy", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $soDuCan = ($nam - 3) % 10;
    $soDuChi = ($nam - 3) % 12;
    $namAmLich = $can[$soDuCan] . " " . $chi[$soDuChi];

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
        #namAmLich {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính năm âm lịch</h1>
        <div class="input-group">
            <label for="nam">Năm:</label>
            <input type="text" id="nam" name="nam">
        </div>
        <div class="input-group">
            <label for="namAmLich">Năm âm lịch:</label>
            <input type="text" id="namAmLich" name="namAmLich" readonly  value="<?php echo $namAmLich; ?>">
        </div>
        <input type="submit" value="=>">
    </form>
</body>
</html>