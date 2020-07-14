<div class="menu">
    <ul>
        <li><a href="index.php?p=home">Home</a></li>
        <li><a href="index.php?p=dashboard">Dashboard</a></li>
    </ul>
</div>
<div class="login-register-box">
    <div>
        <ul>
            <li style="display: inline" onclick="showLogin()">Login</li>
            <li style="display: inline" onclick="showRegister()">Register</li>
        </ul>
    </div>
    <div id="login">
        <?php require_once("forms/login.html"); ?>
    </div>
    <div id="register" style="display: none">
        <?php require_once("forms/signup.html"); ?>
    </div>
</div>