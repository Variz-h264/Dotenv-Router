<?php
/*
 * ระบบนี้จัดทำโดย !VARIZ#7721  ห้ามจำหน่ายโดยเด็ดขาด
 * หากแก้ไข ถือว่าเป็นการละเมิดลิขสิทธิ์ซอฟท์แวร์ มีโทษปรับตั้งแต่ 10,000 บาท จนถึง 200,000 บาท จำคุก 3-6 เดือน หรือทั้งจำทั้งปรับ
 */
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
    require_once __DIR__ . "/lib/connect.php";
} else {
    session_start();
    session_destroy();
    echo "<script>alert('เหมือนว่าจะมีข้อผิดพลาด กรุณาติดต่อผู้พัฒนา!')</script>";
    return;
}

use AltoRouter as Router;

$router = new Router();

$router->map("GET", "/", function () {
    require "pages/home.php";
});
$router->map("GET", "/test", function () {
    require "pages/test.php";
});
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    require "pages/error.php";
}
