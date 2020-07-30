<?php if (!isset($_SESSION['user_id'])) {
    echo "access denied";
    exit();
}
?>
    <div class="submenu">
        <ul>
            <li onclick="showItemForm('helmet')"><a>Helmet</a></li>
            <li onclick="showItemForm('armor')"><a>Armor</a></li>
            <li onclick="showItemForm('boots')"><a>Boots</a></li>
            <li onclick="showItemForm('gloves')"><a>Gloves</a></li>
            <li onclick="showItemForm('weapon')"><a>Main Weapon</a></li>
            <li onclick="showItemForm('subweapon')"><a>Sub Weapon</a></li>
        </ul>
    </div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/BDMplaner/web/forms/newitems/new_armor.html";
include_once $_SERVER['DOCUMENT_ROOT'] . "/BDMplaner/web/forms/newitems/new_helmet.html";
include_once $_SERVER['DOCUMENT_ROOT'] . "/BDMplaner/web/forms/newitems/new_gloves.html";
include_once $_SERVER['DOCUMENT_ROOT'] . "/BDMplaner/web/forms/newitems/new_boots.html";
include_once $_SERVER['DOCUMENT_ROOT'] . "/BDMplaner/web/forms/newitems/new_mainweapon.html";
include_once $_SERVER['DOCUMENT_ROOT'] . "/BDMplaner/web/forms/newitems/new_subweapon.html";