<?php
$a = $b = $c = $nghiem = '';
function giai_ptb1($a, $b) {
    if ($a == 0) {
        if ($b == 0) {
            return 'Phương trình vô số nghiệm';
        } else {
            return 'Phương trình vô nghiệm';
        }
    } else {
        return 'Phương trình có nghiệm x = ' . (-$b/$a);
    }
}

function giai_ptb2($a, $b, $c) {
    if ($a == 0) {
        return giai_ptb1($b, $c);
    } else {
        $delta = $b*$b - 4*$a*$c;
        if ($delta < 0) {
            return 'Phương trình vô nghiệm';
        } else if ($delta == 0) {
            return 'Phương trình có nghiệm kép x1 = x2 = ' . (-$b/(2*$a));
        } else {
            $x1 = (-$b - sqrt($delta)) / (2*$a);
            $x2 = (-$b + sqrt($delta)) / (2*$a);
            return 'Phương trình có hai nghiệm phân biệt x1 = ' . $x1 . ', x2 = ' . $x2;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $nghiem = giai_ptb2($a, $b, $c);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giải phương trình bậc hai</title>
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
        <h1>Giải phương trình bậc hai</h1>
        <div class="input-group">
            <label for="a">Nhập a:</label>
            <input type="text" id="a" name="a" value="<?php echo $a; ?>">
        </div>
        <div class="input-group">
            <label for="b">Nhập b:</label>
            <input type="text" id="b" name="b" value="<?php echo $b; ?>">
        </div>
        <div class="input-group">
            <label for="c">Nhập c:</label>
            <input type="text" id="c" name="c" value="<?php echo $c; ?>">
        </div>
        <input type="submit" value="Giải phương trình">
        <div class="input-group">
            <label for="nghiem">Nghiệm:</label>
            <input type="text" id="nghiem" name="nghiem" readonly value="<?php echo $nghiem; ?>">
        </div>
    </form>
</body>
</html>