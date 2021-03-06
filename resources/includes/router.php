<?php

// wanted behaviour:
// opens link gets content, or an error page accordingly(404, 401...)
// current behaviour:
// open link gets content, or 404


// fallback to directory "/" if attribute isnt set
$request = $_SERVER['REQUEST_URI'];
$url = explode('/', $request);
$request = end($url);


//Zugang für eingeloggte
if (isset($_SESSION['user_id'])) {
    // restricted Area
    // User is logged in
    switch ($request) {
        case 'family' :
            require "web/view/family.php";
            break;
        // charakter needs addition for the charakter
        case
        'character' :
            require "web/view/character.php";
            break;
        case "logout" :
            require "web/view/logout.php";
            break;
    }

}
// zugang für alle
// nonrestricted
switch ($request) {
    case "home" :
        require "web/view/frontpage.php";
        break;
    // not realy needed due to htaccess always routing to index
    /*
    default:
        http_response_code(404);
        require "web/view/404.php";
        break;
    */
}

// logged in


// going to admin panel
// logged in as admin
if (isset($_SESSION['user_id'])) {
    switch ($request) {
        case 'admin-additem' :
            require "web/view/admin/new_item.php";
            break;
    }
}
