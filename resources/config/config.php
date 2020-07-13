<?php
// Kontakt zur Datenbank herstellen nach dem Muster
// Serveradress, Benutzername, Passwort, Datenbankname
// ist eine lokale Maschine daher kein Problem, nie erreichbar außer von dem PC der entwickelt

function db () {
    static $connection;
    if ($connection===NULL){
        $connection = mysqli_connect ("localhost", "bdmroot", "passwort", "bdmplaner");
    }
    return $connection;
}
