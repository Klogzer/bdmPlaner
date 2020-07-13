<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case "/" :
        require "../web/view/frontpage.php";
        break;
    case "" :
        require "../web/view/frontpage.php";
        break;
    case "index.php" :
        require "../web/view/frontpage.php";
        break;
    case '/dashboard' :
        require  "../web/view/family.php";
        break;
    default:
        http_response_code(404);
        require  "../web/view/404.php";
        break;
}