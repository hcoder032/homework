<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Bài tập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6A82FB, #FC5C7D);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 800px;
            text-align: center;
            color: #333;
        }
        h1 {
            font-size: 2.2em;
            margin-bottom: 20px;
            color: #FC5C7D;
        }
        .folder {
            background-color: #6A82FB;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s;
        }
        .folder:hover {
            background-color: #FC5C7D;
        }
        .subfolders {
            display: none;
            margin-top: 15px;
            padding-top: 10px;
        }
        .subfolder-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .subfolder-item {
            width: 100px;
            height: 100px;
            background-color: #6A82FB;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            text-align: center;
            font-size: 1em;
            color: #fff;
            transition: transform 0.3s, background-color 0.3s;
            cursor: pointer;
        }
        .subfolder-item:hover {
            background-color: #FC5C7D;
            transform: translateY(-5px);
        }
        .subfolder-item a {
            text-decoration: none;
            color: #fff;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách Bài tập</h1>
        <div class="folder" onclick="toggleSubfolders()">Thư mục lớn</div>
        <div class="subfolders" id="subfolders">
            <div class="subfolder-grid">
                <!-- Các bài tập từ 1 đến 29 -->
                <?php for ($i = 1; $i <= 29; $i++): ?>
                    <div class="subfolder-item">
                        <a href="bai<?php echo $i; ?>.php">Bài <?php echo $i; ?></a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <script>
        function toggleSubfolders() {
            const subfolders = document.getElementById('subfolders');
            subfolders.style.display = subfolders.style.display === 'none' || subfolders.style.display === '' ? 'block' : 'none';
        }
    </script>
</body>
</html>


