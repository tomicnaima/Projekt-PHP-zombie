<?php

//author: Naima
//date: 2025-30-10
//description: this code shows a main menu and outputs the selected option

$text0 = 'Hauptmenue';
$number = 0;
$star = '*';
while ($number <= 10) {
    $star .= '*';  // Wert wird erweitert
    $number ++;        // Wert wird um 1 erhöht
}
$text1 = '(A)endern';
$text2 = '(B)eenden';
$text3 = '(D)rucken';
$text4 = '(E)ingeben';
$text5 = '(L)oeschen';
$c = "$text0\n$star\n$text1\n$text2\n$text3\n$text4\n$text5";
print $c;
$decision= readline("\n Auswahl:");
switch (strtoupper($decision)) {
    case 'A':
        print "Sie haben Ändern gewält!";
        break;
    case 'B':
        print "Sie haben Beenden gewält!";
        break;
    case 'D':
        print "Sie haben Drucken gewält!";
        break;
    case 'E':
        print "Sie haben Eingeben gewählt!";
        break;
    case 'L':
        print "Sie haben Löschen gewählt!";
        break;
    default:
        print "Diese Auswahl gibt es nicht!";
        break;
}
?>
