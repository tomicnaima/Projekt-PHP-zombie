<?php

//author: Naima
//date: 2025-30-10
//description: kleines Coin Toss Spiel

//Einleitung
print "Wilkommen zum Coin Toss Spiel!\n";
print "Tipp: 1 für Kopf, 2 für Zahl\n";

// Datentypen
$spielerTipp = 1; // Integer: 1 = Kopf, 2 = Zahl
$computernumber = rand(1, 2); // Integer: Zufall zwischen 1 und 2
$richtig = false; // Boolean
$punkte = 0.0; // Float

//Funktionen
function throwcoin() {
    return rand(1, 2); //1 Kopf, 2 Zahl (Zufall)
}

function showresult($treffer) {
    if ($treffer) {
        echo "Richtig!\n";
    } else {
        echo "Falsch!\n";
    }
}

//Spiel-Logik
$computernumber = throwcoin();

if ($spielerTipp == $computerZahl) { //comparison operators
    $richtig = true;
    $punkte = $punkte + 10; //Add
} else {
    $punkte = $punkte - 5; //Sub
}

// Inkrement und Dekrement
$runde = 1;
$runde++; // Inkrement
$versuche = 2;
$versuche--; // Dekrement

// Mehrzeilige Ausgabe

echo "Ergebnis:\n";

if ($computerZahl == 1) {
    echo "Die Münze zeigt: Kopf\n";
} else {
    echo "Die Münze zeigt: Zahl\n";
}

// 6️⃣ Ergebnis und Punkte
zeigeErgebnis($richtig); // Funktion
print "Punkte: $punkte\n"; // Zweiter Ausgabebefehl
print "Runde: $runde | Verbleibende Versuche: $versuche\n";
echo "Danke fürs Spielen!\n";

?>
