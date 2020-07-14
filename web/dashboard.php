<?php
session_start();
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<div class="header">
    <?php include 'header.php';?>
</div>
<h1>Dashboard I</h1>

<?php
// In der If-Abfrage wird abgefragt, ob die beim Login
// gestartete Session aktiv ist
if (isset($_SESSION['user_id'])) {
    echo "<h2>Du bist angemeldet</h2>";
} else {
// Ist keine Session aktiv, kommt diese Anzeige:
    echo "<h2>Du bist nicht angemeldet</h2>";
    header("Location:");
}

?>
<br>
<!-- Hier binden wir einen Logout-Button ein -->
<form action="../resources/includes/logout_inc.php" method="POST">
    <button type="submit" name="submit">Ausloggen</button>
</form>
<br>
<a href="family.php">Seite II</a>

<div class="footer">
    <?php include 'footer.php';?>
</div>
</body>
</html>