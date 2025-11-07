<?php

/*
Author: Naima
Date: 2025-30-10
Description: Dieses Skript fragt den Benutzer nach seinem Namen, Wohnort und Jahrgang und gibt eine formatierte Begrüssung aus.
*/

//Name
$name = readline("Wie heisst Du? ");

// Wohnort
$wohnort = readline("Wo wohnst Du? ");

// Jahrgang
$jahrgang = readline("In welchem Jahr bist du geboren? ");

// Ausgabe
print "Hallo $name aus $wohnort, du bist in $jahrgang geboren.\n";

// readline() fragt dich in der Konsole ab und speichert die Eingabe in einer Variablen.

// printf() formatiert einen Text und gibt ihn aus.
?>
