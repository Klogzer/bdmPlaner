<?php

// wanted behaviour:
// opens link gets content, or an error page accordingly(404, 401...)
// current behaviour:
// open link gets content, or 404


// fallback to directory "/" if attribute isnt set
$request = $_GET["p"] ?? "/";
if (isset($_SESSION['user_id'])) {
    // restricted Area
    // User is logged in
    switch ($request) {
        case
        'dashboard' :
            require "../web/view/family.php";
            break;
    }
} else {
    // nonrestricted
    switch ($request) {
        case "/" :
            require "../web/view/frontpage.php";
            break;
        case "" :
            require "../web/view/frontpage.php";
            break;
        case "home" :
            require "../web/view/frontpage.php";
            break;

        default:
            http_response_code(404);
            require "../web/view/404.php";
            break;
    }
}
