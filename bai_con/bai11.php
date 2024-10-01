<?php
$canh1 = $canh2 = $canh3 ='';
$ketQua = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $canh1 = $_POST["canh1"];
    $canh2 = $_POST["canh2"];
    $canh3 = $_POST["canh3"];
   // $diemTB = ($hk1 + $hk2 * 2) / 3;

    if (($canh1 + $canh2>$canh3) && ($canh1 + $canh3 > $canh2) && ($canh2 + $canh3 >$canh1))
     {
        if($canh1 == $canh2 && $canh2 == $canh3)
        {
            $ketQua = " Đây là tam giác đều!";
        }
        elseif(($canh1 == $canh2 && sqrt($canh1*$canh1+$canh2*$canh2) == $canh3) || 
        ($canh2 == $canh3 && sqrt($canh2*$canh2+$canh3*$canh3) == $canh1) ||
        ($canh1 == $canh3 && sqrt($canh1*$canh1+$canh3*$canh3) == $canh2)
        )
        {
            $ketQua = "Đây là tam giác vuông cân!";
        }
        elseif($canh1 == $canh2 && $canh2 == $canh3 && $canh3 == $canh1)
        {
            $ketQua = "Đây là tam giác cân!";
        }
        elseif(($canh1 * $canh1 + $canh2*$canh2 == $canh3+$canh3) ||
        ($canh2 * $canh2 + $canh3*$canh3 == $canh1+$canh1) ||
        ($canh1 * $canh1 + $canh3*$canh3 == $canh2+$canh2)          
        )
        {
            $ketQua = " Đây là tam giác Vuông!";
        }
        else
        {
            $ketQua = " Đây là tam giác thường!";
        }
    } else {
        $ketQua = "Đây không phải là một tam giác!";
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
        #ketQua {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Nhận dạng tam giác</h1>
        <div class="input-group">
            <label for="canh1">Cạnh 1 (cm):</label>
            <input type="text" id="canh1" name="canh1" value="<?php echo $canh1; ?>">
        </div>
        <div class="input-group">
            <label for="canh2">Cạnh 2 (cm):</label>
            <input type="text" id="canh2" name="canh2" value="<?php echo $canh2; ?>">
        </div>
        <div class="input-group">
            <label for="canh3">Cạnh 3 (cm):</label>
            <input type="text" id="canh3" name="canh3" value="<?php echo $canh3; ?>">
        </div>
        <div class="input-group">
            <label for="ketQua">Loại tam giác:</label>
            <input type="text" id="ketQua" name="ketQua" readonly  value="<?php echo $ketQua; ?>">
        </div>
   
        <input type="submit" value="Nhận dạng">
    </form>
</body>
</html>