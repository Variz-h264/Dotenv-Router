
<?php

$db_host = $_ENV['HOST'];
$db_name = $_ENV['DATABAST'];
$db_user = $_ENV['USER'];
$db_pass = $_ENV['PASSWORD'];
$db_port = $_ENV['PORT'];

// header('Content-Type: application/json');
date_default_timezone_set("Asia/Bangkok");

try {
    $db = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h1 style='text-align: center;margin: 1rem;'>เชื่อมต่อสำเร็จ</h1>";
} catch (PDOException $e) {
    echo "มีข้อผิดพลาดกับการเชื่อมต่อ: " . $e->getMessage();
}
