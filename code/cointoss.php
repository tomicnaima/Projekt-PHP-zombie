<?php
// author: Naima
// date: 2025-10-30
// description: kleines Coin Toss Spiel

// Einleitung
print "Willkommen zum Coin Toss Spiel!\n";
print "Tipp: 1 für Kopf, 2 für Zahl\n";

// Datentypen
$player = 1;
$computernumber = rand(1, 2);
$correct = false;
$points = 0.0;

$treffer = readline("Wähle deine Zahl.");

// Funktionen
function throwcoin() {
    return rand(1, 2); // 1 Kopf, 2 Zahl (Zufall)
}

function showresult($treffer) {
    if ($treffer) {
        echo "Richtig!\n";
    } else {
        echo "Falsch!\n";
    }
}

// Spiel-Logik
$computernumber = throwcoin();

if ($player == $computernumber) {
    $correct = true;
    $points = $points + 10;
} else {
    $points = $points - 5;
}

// Inkrement und Dekrement
$round = 1;
$round++;
$try = 2;
$try--;

// Mehrzeilige Ausgabe
echo "Ergebnis:\n";

if ($computernumber == 1) {
    echo "Die Münze zeigt: Kopf\n";
} else {
    echo "Die Münze zeigt: Zahl\n";
}

// Ergebnis und Punkte
showresult($correct);
print "Punkte: $points\n";
print "Runde: $round | Verbleibende Versuche: $try\n";


$treffer = readline("Wähle deine Zahl.");

$computernumber = throwcoin();

// Spiel-Logik
$computernumber = throwcoin();

if ($player == $computernumber) {
    $correct = true;
    $points = $points + 10; //Add
} else {
    $points = $points - 5; //sub
}

// Inkrement und Dekrement
$round = 1;
$round++;
$try = 2;
$try--;

// Mehrzeilige Ausgabe
echo "Ergebnis:\n";

if ($computernumber == 1) {
    echo "Die Münze zeigt: Kopf\n";
} else {
    echo "Die Münze zeigt: Zahl\n";
}

// Ergebnis und Punkte
showresult($correct);
print "Punkte: $points\n";
echo "Danke fürs Spielen!\n";

?>
