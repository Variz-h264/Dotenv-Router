<?php
$title = "";
http_response_code(404);
$response_code = http_response_code();
require "components/Header.php";
?>
<?php if (http_response_code() == 404) { ?>
    <h1><?= $response_code ?></h1>
<?php } else if (http_response_code() == 500) { ?>
    <h1><?= $response_code ?></h1>
<?php } else if (http_response_code() == 200) { ?>
    <h1>Good: <?= $response_code ?></h1>
<?php } else { ?>
    <h1>Error: <?= $response_code ?></h1>
<?php } ?>

<?php require "components/Footer.php"; ?>