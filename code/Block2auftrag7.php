<?php

// author: Naima
// date: 2025-30-10
// description: this code calculates the sum of three ages and checks if the sum is bigger than 100

// Drei Alter einlesen
$age1 = readline("Alter 1:");
$age2 = readline("Alter 2:");
$age3 = readline("Alter 3:");

// calculate the sum of the ages
$sum = $age1 + $age2 + $age3;

// check the conditions and output
if ($sum > 100) {
    printf("Die Summe ist groesser als 100!\n");
} else {
    printf("Die Summe ist nicht groesser als 100!\n");
}
?>
