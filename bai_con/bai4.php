<?php
$canhHuyen = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $canhA = $_POST["canhA"];
    $canhB = $_POST["canhB"];
    $canhHuyen = sqrt(pow($canhA, 2) + pow($canhB, 2));

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
        #canhHuyen {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tính cạnh huyền tam giác vuông</h1>
        <div class="input-group">
            <label for="canhA">Cạnh A:</label>
            <input type="text" id="canhA" name="canhA">
        </div>
        <div class="input-group">
            <label for="canhB">Cạnh B:</label>
            <input type="text" id="canhB" name="canhB">
        </div>
        <div class="input-group">
            <label for="canhHuyen">Cạnh huyền:</label>
            <input type="text" id="canhHuyen" name="canhHuyen" readonly  value="<?php echo $canhHuyen; ?>">
        </div>
        <input type="submit" value="Tính">
    </form>
</body>
</html>