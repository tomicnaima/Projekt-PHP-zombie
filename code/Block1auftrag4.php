<?php

// Jahrgang
$aktuellesJahr = date("2025");

$jahrgang = readline("In welchem Jahr bist du geboren? ");
// Alter berechnen
$alter = $aktuellesJahr - $jahrgang;

// Ausgabe
print "In diesem Jahr wirst du $alter Jahre alt!\n";
?>
