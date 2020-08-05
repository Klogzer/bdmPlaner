<?php
// wanted behaviour:
// opens link gets content, or an error page accordingly(404, 401...)
// current behaviour:
// open link gets content, or 404


// fallback to directory "/" if attribute isnt set
$request = $_SERVER['REQUEST_URI'];
$url = explode('/', $request);
$request = end($url);


switch ($request) {
    case 'family' :
        require "web/view/family.php";
        break;
    // charakter needs addition for the charakter
    case
    'character' :
        require "web/view/Character.php";
        break;
    case "home" :
        require "web/view/frontpage.php";
        break;
    case "" :
        require "web/view/frontpage.php";
        break;
    case "editCharacter" :
        require "web/view/editCharacter.php";
        break;
    default  :
        require "web/view/404.php";
        break;
}

