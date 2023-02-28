<?php
$url = "http://$_SERVER[HTTP_HOST]";
$REQUEST_URI = "$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ($title == true) { ?>
        <title><?= $title ?> | Variz</title>
    <?php } else if (http_response_code() == 404) { ?>
        <title><?= $response_code ?> | ไม่พบหน้าที่ต้องการ</title>
    <?php } else if (http_response_code() == 500) { ?>
        <title><?= $response_code ?> | เซิฟเวอร์มีปัญหา</title>
    <?php } else if (http_response_code() == $response_code) { ?>
        <title>Error: <?= $response_code ?> | เว็บเกิดข้อผิดพลาด</title>
    <?php } else { ?>
        <title>Variz</title>
    <?php } ?>

    <link rel="icon" href="<?= $url ?>/assets/images/logo.png?v=1" type="ismage/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?= $url ?>/assets/styles/variz.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
</head>

<body>
    <?php require "components/Navbar.php"; ?>
    <div class="container">