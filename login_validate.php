<?php
include "connectdb.php";

$entered_Username = $_POST['sername'];
$enteredPassword = $_POST['password'];

$stored_PasswordHash_sql = "boeren";







session_start();

$_SESSION['sername'] = $entered_Username;
$_SESSION['loggedin'] = true;

if ($entered_Username && $enteredPassword) {
    if ($enteredPassword === $stored_PasswordHash_sql) { // Vergelijk de ingevoerde wachtwoord-hash met de opgeslagen wachtwoord-hash
       echo "U bent ingelogd";
    } else {
        echo "U heeft geen geldig account.<br>";
        echo "Maak een account aan.<br>";
        echo "<a href='register_form.php'>Registratie</a>";
    }
} else {
    echo "Gebruikersnaam en wachtwoord zijn vereist.";
}
?>
