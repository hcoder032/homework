<?php
// Danh sách các file bài tập
$files = [];
for ($i = 1; $i <= 29; $i++) {
    $files[] = "bai$i.php";
}

// Trả về dữ liệu dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($files);
?>
