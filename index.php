<?php
// Cookie und so
session_start();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="web/styles/style.css">
    <title>Login</title>
</head>
<body>
<div class="header">
    <?php require_once('web/navbar.php'); ?>
</div>
<div class="body">
    <?php require_once("resources/includes/router.php"); ?>
</div>
<div class="footer">
    <?php require_once('web/footer.php'); ?>
</div>
</body>
</html>