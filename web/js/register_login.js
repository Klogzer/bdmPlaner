function switchSignupLogin(value) {
    switch (value) {
        case "Login": {
            document.getElementById("login").style.display = 'block';
            document.getElementById("register").style.display = 'none';
        }
        case "Register": {
            document.getElementById("login").style.display = 'none';
            document.getElementById("register").style.display = 'block';
        }
    }
}