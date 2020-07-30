<div class="menu">
    <ul>
        <li><a href="home">Home</a></li>
        <?php
        if (!isset($_SESSION["user_id"])) { ?>
            <div class="login-register-box" style="float: right">
                <div style="float: left">
                    <ul>
                        <li onclick="showLogin()"><a>Login</a></li>
                        <li onclick="showRegister()"><a>Register</a></li>
                    </ul>
                </div>

                <div id="login">
                    <?php require_once("forms/login.html"); ?>
                </div>
                <div id="register" style="display: none ">
                    <?php require_once("forms/signup.html"); ?>
                </div>
            </div>
        <?php } else { ?>
            <li><a href="family">Family</a></li>
            <div style='float: right'>
                <li><a href="logout">Logout</a></li>
            </div>
        <?php } ?>
    </ul>
</div>

