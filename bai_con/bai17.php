<?php
$number = $result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $result = '';
    for ($i = 1; $i <= 10; $i++) {
        $result .= $number . " x " . $i . " = " . $number * $i . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bảng cửu chương</title>
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
        #result {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Bảng cửu chương</h1>
        <div class="input-group">
            <label for="number">Số:</label>
            <input type="text" id="number" name="number" value="<?php echo $number; ?>">
        </div>
        <input type="submit" value="Thực hiện">
        <div id="result"><?php echo $result; ?></div>
    </form>
</body>
</html>