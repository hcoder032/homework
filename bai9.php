<?php
$nghiem = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    if ($a == 0) {
        if ($b == 0) {
            $nghiem = "Phương trình có vô số nghiệm";
        } else {
            $nghiem = "Phương trình vô nghiệm";
        }
    } else {
        $nghiem = "Nghiệm x = " . (-$b / $a);
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
        #nghiem {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Giải phương trình bậc nhất</h1>
        <div class="input-group">
            <label for="a">Hệ số a:</label>
            <input type="text" id="a" name="a">
        </div>
        <div class="input-group">
            <label for="b">Hệ số b:</label>
            <input type="text" id="b" name="b">
        </div>
        <div class="input-group">
            <label for="nghiem">Nghiệm:</label>
            <input type="text" id="nghiem" name="nghiem" readonly  value="<?php echo $nghiem; ?>">
        </div>
        <input type="submit" value="Giải phương trình">
    </form>
</body>
</html>