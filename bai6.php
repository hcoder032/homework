<?php
$cauChao = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gio = $_POST["gio"];
    if ($gio >= 0 && $gio < 13) {
        $cauChao = "Chào buổi sáng!";
    } elseif ($gio >= 13 && $gio < 18) {
        $cauChao = "Chào buổi chiều!";
    } else {
        $cauChao = "Chào buổi tối!";
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
        #cauChao {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Chào theo giờ</h1>
        <div class="input-group">
            <label for="gio">Giờ:</label>
            <input type="text" id="gio" name="gio">
        </div>
        <div class="input-group">
            <label for="cauChao">Câu chào:</label>
            <input type="text" id="cauChao" name="cauChao" readonly  value="<?php echo $cauChao; ?>">
        </div>
        <input type="submit" value="Chào">
    </form>
</body>
</html>