<?php
$so = $chu = '';
function doc_1_so($so) {
    switch ($so) {
        case 0: return 'Không';
        case 1: return 'Một';
        case 2: return 'Hai';
        case 3: return 'Ba';
        case 4: return 'Bốn';
        case 5: return 'Năm';
        case 6: return 'Sáu';
        case 7: return 'Bảy';
        case 8: return 'Tám';
        case 9: return 'Chín';
        default: return '';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $so = $_POST["so"];
    $tram = intval($so / 100);
    $chuc = intval(($so % 100) / 10);
    $dv = $so % 10;
    $doc_tram = $doc_chuc = $doc_dv = '';

    if ($tram != 0) {
        $doc_tram = doc_1_so($tram) . ' Trăm';
    }
    if ($chuc != 0) {
        if ($chuc == 1) {
            $doc_chuc = ' Mười';
        } else {
            $doc_chuc = ' ' . doc_1_so($chuc) . ' Mươi';
        }
    } elseif ($tram != 0 && $dv != 0) {
        $doc_chuc = ' Lẻ';
    }
    if ($dv != 0) {
        if ($dv == 5 && $chuc != 0) {
            $doc_dv = ' Lăm';
        } else {
            $doc_dv = ' ' . doc_1_so($dv);
        }
    }
    $chu = $doc_tram . $doc_chuc . $doc_dv;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đọc số</title>
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
        #chu {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Đọc số</h1>
        <div class="input-group">
            <label for="so">Nhập số:</label>
            <input type="text" id="so" name="so" value="<?php echo $so; ?>">
        </div>
        <input type="submit" value="Đọc số">
        <div class="input-group">
            <label for="chu">Bằng chữ:</label>
            <input type="text" id="chu" name="chu" readonly value="<?php echo $chu; ?>">
        </div>
    </form>
</body>
</html>