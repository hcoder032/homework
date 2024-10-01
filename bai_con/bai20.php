<?php
$N = $A = $B = $chuoi = '';
function kt_so($so, $a, $b) {
    if ($so % $a == 0 && $so % $b == 0) {
        return 1;
    } else {
        return 0;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = $_POST["N"];
    $A = $_POST["A"];
    $B = $_POST["B"];
    for ($i = 1; $i <= $N; $i++) {
        if (kt_so($i, $A, $B) == 1) {
            $chuoi .= $i . ' ';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Số chia hết cho A và B</title>
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
        #chuoi {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Số chia hết cho A và B</h1>
        <div class="input-group">
            <label for="N">Nhập N:</label>
            <input type="text" id="N" name="N" value="<?php echo $N; ?>">
        </div>
        <div class="input-group">
            <label for="A">Nhập A:</label>
            <input type="text" id="A" name="A" value="<?php echo $A; ?>">
        </div>
        <div class="input-group">
            <label for="B">Nhập B:</label>
            <input type="text" id="B" name="B" value="<?php echo $B; ?>">
        </div>
        <input type="submit" value="Các số chia hết cho A và B">
        <div class="input-group">
            <label for="chuoi">Số chia hết:</label>
            <input type="text" id="chuoi" name="chuoi" readonly value="<?php echo $chuoi; ?>">
        </div>
    </form>
</body>
</html>