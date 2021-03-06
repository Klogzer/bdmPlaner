<?php
session_start();
if (isset($_POST['submit'])) {
    require_once "../config/config.php";
    $connection = db();
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    // Error handlers
    // Existiert der Benutzername?
    $sql = "SELECT * FROM user WHERE username = '$user'";
    $result = mysqli_query($connection, $sql);
    // mysqli_num_rows gibt die Anzahl an, wie oft die Bedingung von $sql erfüllt wird
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        // ?login=user gibt die Information an die index.php weiter
        header("Location: /index.php?login=password");
        exit();
    } else {
        // Ist das Passwort korrekt?
        // Die Variable row wird als Array mit den Informationen aus der Datenbank befüllt
        if ($row = mysqli_fetch_assoc($result)) {
            // De-Hashing des Passwortes
            // password_verify($password, $row['password']) gibt true oder false zurück
            $hashedPassword = password_verify($password, $row['pw_hash']);
            if ($hashedPassword == false) {
                header("Location: /index.php?login=password");
                exit();
                // elseif fängt unvorhergesehene Fehler ab
            } elseif ($hashedPassword == true) {
                // Benutzer anmelden
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['username'];
                header("Location: ../../family");
                exit();
            }
        }
    }

} else {
    header("Location: /index.php?login=error");
    exit();
}
