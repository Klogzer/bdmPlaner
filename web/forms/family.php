<?php
include 'dbhandler/familyhandler.php';
$family = familyhandler::getFamilyByUserID($_SESSION['user_id']);
echo $family;
if (isset($_SESSION['user_id'])) {
    echo ">hinzufügen</button>
</form>
";
} else {
// Ist keine Session aktiv, kommt diese Anzeige:
    header("Location: index.php");
};
?>
