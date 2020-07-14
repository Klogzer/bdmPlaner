<?php
// Cookie und so
session_start();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/BDMplaner/web/styles/style.css">
    <script type="text/javascript" src="/BDMplaner/web/js/register_login.js"></script>
    <title>Login</title>
</head>
<div class="header">
    <?php require_once('header.php'); ?>
</div>
<body>
<div class="body">
    <?php require_once("../resources/includes/router.php"); ?>
</div>
<div class="footer">
    <?php require_once('footer.php'); ?>
</div>
</body>
</html>