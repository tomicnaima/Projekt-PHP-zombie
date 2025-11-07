<?php

//author: Naima
//date: 2025-30-10
//descritption: this code compares the heights of two people and outputs whoever is taller and by how much.

//first person
$name1 = readline("Wie heisst die erste Person?");
$height1 = readline("Wie gross ist $name1?");

//second person
$name2 = readline("Wie heisst die zweite Person?");
$height2 = readline("Wie gross ist $name2?");

//output
if ($height1 > $height2) {
    $diff = $height1 - $height2;
    print "$name1 ist $diff Zentimeter grösser als $name2";
} elseif ($height2 > $height1) {
    $diff = $height2 - $height1;
    print "$name2 ist $diff Zentimeter grösser als $name1";
} else {
    print "$name1 und $name2 sind gleich gross!";
}
?>
