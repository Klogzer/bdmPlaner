<div class="menu">
    <ul>
        <li><a href="home">Home</a></li>
        <?php
        echo (isset($_SESSION["user_id"]))?
            "<li><a href=\"dashboard\">Dashboard</a></li>
             <li><a href=\"logout\">Logout</a></li>" : "" ; ?>

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