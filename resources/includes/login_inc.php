<?php
// Sitzung starten, damit der Benutzer eingeloggt bleibt
session_start();
include_once '../dbhandler/mysqlDB.php';


if (isset($_POST['submit'])) {

    $connection = db();
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    // Error handlers
    // Existiert der Benutzername?
    $sql = "SELECT * FROM user WHERE username = '$user'";
    $result = mysqli_query($connection, $sql);
    // mysqli_num_rows gibt die Anzahl an, wie oft die Bedingung von $sql erfüllt wird
    $resultCheck = mysqli_num_rows($result);
    if ($result < 1) {
        // ?login=user gibt die Information an die index.php weiter
        header("Location: ../index.php?login=user");
        exit();
    } else {
        // Ist das Passwort korrekt?
        // Die Variable row wird als Array mit den Informationen aus der Datenbank befüllt
        if ($row = mysqli_fetch_assoc($result)) {
            // De-Hashing des Passwortes
            // password_verify($password, $row['password']) gibt true oder false zurück
            $hashedPassword = password_verify($password, $row['pw_hash']);
            if ($hashedPassword == false) {
                header("Location: ../index.php?login=password");
                exit();
                // elseif fängt unvorhergesehene Fehler ab
            } elseif ($hashedPassword == true) {
                // Benutzer anmelden
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['username'];
                header("Location: ../dashboard.php");
                exit();
            }
        }
    }

} else {
    header("Location: ../index.php?login=error");
    exit();
}
