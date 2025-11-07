<?php

//author: Naima
//date: 2025-30-10
//description: this code shows a menu of classes and outputs the selected class

$text0 = 'Themenauswahl';
$number = 0;
$star = '*';
while ($number <= 16) {
    $star .= '*';  // Wert wird erweitert
    $number ++;        // Wert wird um 1 erhöht
}
$text1 = '1 Modul 101';
$text2 = '2 Modul 102';
$text3 = 'Modul 103';
$text4 = '4 Modul 104';
$text5 = '5 Modul 105';
$text6 = '6 Modul 106';
$text7 = '7 Modul 107';
$c = "$text0\n$star\n$text1\n$text2\n$text3\n$text4\n$text5\n$text6\n$text7";
print $c;
$decision= readline("\n Auswahl:");
if ($decision <= 8) {
    print "Sie haben Modul $decision gewählt!\n"
;}
else {
    print "Dieses Thema gibt es nicht!"
;}
