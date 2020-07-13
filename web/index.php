<?php
// Cookie und so
session_start();
?>
<html>
<head>
    <script type="text/javascript" src="js/register_login.js"></script>
    <title>Login</title>
</head>
<div class="header">
    <?php require_once('header.php'); ?>
    <div class="menu">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>
    <div class="login-register-box">
        <div>
            <ul>
                <li style="display: inline" onclick="switchSignupLogin(this.text)">Login</li>
                <li style="display: inline" onclick="switchSignupLogin(this.text)">Register</li>
            </ul>
        </div>
        <div id="login">
            <?php require_once("forms/login.html"); ?>
        </div>
        <div id="register" style="display: none">
            <?php require_once("forms/signup.html"); ?>
        </div>
    </div>
</div>
<body>
<div class="body">
    <?php require_once('body.php'); ?>
</div>
<div class="footer">
    <?php require_once('footer.php'); ?>
</div>
</body>
</html>