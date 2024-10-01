<?php
$soLon = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $soA = $_POST["soA"];
    $soB = $_POST["soB"];
    $soLon = $soA > $soB ? $soA : $soB;

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
        #soLon {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Tìm số lớn hơn</h1>
        <div class="input-group">
            <label for="soA">Số A:</label>
            <input type="text" id="soA" name="soA">
        </div>
        <div class="input-group">
            <label for="soB">Số B:</label>
            <input type="text" id="soB" name="soB">
        </div>
        <div class="input-group">
            <label for="soLon">Số lớn hơn:</label>
            <input type="text" id="soLon" name="soLon"readonly  value="<?php echo $soLon; ?>">
        </div>
        <input type="submit" value="Tìm">
    </form>
</body>
</html>