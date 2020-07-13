<div class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
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