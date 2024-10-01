<?php
$N = $result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = $_POST["N"];
    $result = '';
    if ($N < 2) {
        $result = 'Không có số nguyên tố nào nhỏ hơn hoặc bằng ' . $N;
    } else {
        $result = '2';
        for ($i = 3; $i <= $N; $i++) {
            if (kt_snt($i)) {
                $result .= ', ' . $i;
            }
        }
    }
}

function kt_snt($so) {
    if ($so < 2) {
        return 0;
    }
    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            return 0;
        }
    }
    return 1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Số nguyên tố</title>
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
        <h1>Số nguyên tố</h1>
        <div class="input-group">
            <label for="N">Nhập N:</label>
            <input type="text" id="N" name="N" value="<?php echo $N; ?>">
        </div>
        <input type="submit" value="Các số nguyên tố <= N">
        <div class="input-group">
            <label for="result">Số nguyên tố:</label>
            <input type="text" id="result" name="result" readonly value="<?php echo $result; ?>">
        </div>
    </form>
</body>
</html>