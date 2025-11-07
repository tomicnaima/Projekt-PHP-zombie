<?php

//author: Naima
//date: 2025-30-10
//description: this code counts down from 20 to 0 and calculates the sum of these


$summe = 0;

// Schleife von 20 runter bis 0
for ($number = 20; $i >= 0; $number--) {
    echo $number . " ";   // Zahl ausgeben
    $summe += $number;    // Zahl zur Summe addieren
}

// Zeilenumbruch und Summe ausgeben
echo "\n\nSumme: " . $summe . "\n";
?>
