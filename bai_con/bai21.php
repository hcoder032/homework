<?php
$A = $B = $uscln = $bscnn = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = $_POST["A"];
    $B = $_POST["B"];
    if (!is_numeric($A) || !is_numeric($B)) {
        $uscln = $bscnn = 'Vui lòng nhập số nguyên';
    } else {
        $a = abs($A);
        $b = abs($B);
        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }
        $uscln = $a;
        $bscnn = abs($A * $B) / $uscln;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>USCLN và BSCNN</title>
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
        #uscln, #bscnn {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tìm USCLN và BSCNN</h1>
        <div class="input-group">
            <label for="A">Nhập A:</label>
            <input type="text" id="A" name="A" value="<?php echo $A; ?>">
        </div>
        <div class="input-group">
            <label for="B">Nhập B:</label>
            <input type="text" id="B" name="B" value="<?php echo $B; ?>">
        </div>
        <input type="submit" value="Tìm USCLN và BSCNN">
        <div class="input-group">
            <label for="uscln">USCLN:</label>
            <input type="text" id="uscln" name="uscln" readonly value="<?php echo $uscln; ?>">
        </div>
        <div class="input-group">
            <label for="bscnn">BSCNN:</label>
            <input type="text" id="bscnn" name="bscnn" readonly value="<?php echo $bscnn; ?>">
        </div>
    </form>
</body>
</html>