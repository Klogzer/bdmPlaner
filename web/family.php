<?php
session_start();
?>

<html lang='de'>
<head>
    <title>Registrieren</title>
</head>
<body>

<?php
include 'dbhandler/familyhandler.php';
$family = familyhandler::getFamilyByUserID($_SESSION['user_id']);
echo $family;
if (isset($_SESSION['user_id'])) {
    echo "<h1>Neue Familie!</h1>
<form action=\"includes/register_family.php\" method=\"POST\">
    <input type=\"text\" name=\"familyname\" placeholder=\"Familienname\"><br>
    <button type=\"submit\" name=\"submit\">hinzufügen</button>
</form>
";
} else {
// Ist keine Session aktiv, kommt diese Anzeige:
    header("Location: index.php");
};
?>
</body>
</html>