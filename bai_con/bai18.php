<?php
$bd = $kt = $result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bd = $_POST["bd"];
    $kt = $_POST["kt"];
    $result = '<table>';
    for ($i = $bd; $i <= $kt; $i++) {
        $result .= "<tr><td>Bảng cửu chương của " . $i . ":</td>";
        for ($j = 1; $j <= 10; $j++) {
            $result .= "<td>" . $i . " x " . $j . " = " . $i * $j . "</td>";
        }
        $result .= "</tr>";
    }
    $result .= '</table>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bảng cửu chương mở rộng</title>
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
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Bảng cửu chương mở rộng</h1>
        <div class="input-group">
            <label for="bd">Số bắt đầu:</label>
            <input type="text" id="bd" name="bd" value="<?php echo $bd; ?>">
        </div>
        <div class="input-group">
            <label for="kt">Số kết thúc:</label>
            <input type="text" id="kt" name="kt" value="<?php echo $kt; ?>">
        </div>
        <input type="submit" value="In bảng cửu chương">
        <div><?php echo $result; ?></div>
    </form>
</body>
</html>