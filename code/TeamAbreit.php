<?php

/*
Author: Naima
Date: 5-11-2025
Description: Team Arbeit mit Dominik grr
*/


//Zahlen...

//...auf beliebige Dezimalstellen runden.
$number = 3.823456;
$roundedNumber = round($number, 2);

//...auf beliebige Weise formatieren.
$formattedNumber = number_format(1234567.8910, 2, ',', '.');

//...auf den nächsten Integer abrunden.
$number = 4.7;
$abgerundet = floor($zahl);

//...auf den nächsten Integer aufrunden
$number = 4.3;
$aufgerundet = ceil($zahl);


//Finden Sie Funktionen mit denen Sie...

//...den Absolutwert von Zahlen bestimmen
$number -15;
$absolutwert = abs($zahl);

//...die kleinste von mehreren Zahlen bestimmen
$smallestnumber = min(3, 5, 1, 9, 2);

//...die grösste von mehreren Zahlen bestimmen
$biggestnumber = max(3, 5, 1, 9, 2);


//Finden Sie Funktionen mit denen Sie...

//...Zeichen am Ende eines Strings entfernen
$newtext = substr($text, 0, -1);
echo $newtext;

//...Zeichen am Anfang eines Strings entfernen
$newtext = substr($text, 2);
echo $newtext;

//...Zeichen am Anfang und/oder Ende eines Strings entfernen.
$text = "  Hi guys!  ";
$newtext = trim($text);

//...einen Teil eines Strings extrahieren.
$text = "Teopedora";
$part = substr($text, 4, 4);

//...die numerische Position eines Zeichens in einem String finden.
$text = "Hi guys!";
$position = strpos($text, "g");

//...die Anzahl Zeichen eines Strings auslesen.
$text = "Hallo";
$anzahl = strlen($text);

//...die Zeichen eines Strings in Kleinbuchstaben umwandeln.
$text = "TEOPEDORA WILL EIN HTML FILE";
$lowercase = strtolower($text);

//...die Zeichen eines Strings in Grossbuchstaben umwandeln.
$text = "teopedora will ein html file";
$uppercase = strtoupper($text);

//...das erste Zeichen jedes Wortes in einem String in einen Grossbuchstaben umwandeln.
$text = "hey girl";
$neu = ucwords($text);


//Finden Sie Funktionen mit denen Sie...

//...einen String nach einem Separator in ein Array aufteilen.
$text = "Teodora,Shivina,Bebe";
$array = explode(",", $text);

//...die Werte eines Arrays zu einem String zusammensetzen.
$text = "Teodora,Shivina,Bebe";
$array = implode(",", $array);


//Finden Sie Funktionen mit denen Sie...

//...die Übereinstimmenden Werte mehrerer Arrays finden.
$a1 = [1, 2, 3, 4, 5];
$a2 = [4, 5, 6, 7, 8];
$common = array_intersect($a1, $a2);

//...die Differenz mehrerer Arrays finden.
$a1 = [1, 2, 3, 4, 5];
$a2 = [4, 5, 6, 7, 8];
$difference = array_diff($a1, $a2);

//...mehrere Arrays zu einem Array zusammenfügen.
$a1 = [A,B,C];
$a2 = [D,E,F];
$merged = array_merge($a1, $a2);

//...bestimmte Elemente eines Arrays extrahieren.
$fruits = ["Apple", "Banana", "Watermelon", "Dragonfruit"];
$selected = array_slice($fruits, 1, 2);

//...sicherstellen, dass in einem Array jeder Wert einmalig ist.
$numbers = [1,2,3,1,1,1];
$unique = array_unique($numbers);

//...die Elemente eines Arrays mischen.
$numbers = [1,2,3,4];
shuffle($numbers);

//...ein zufälliges Element eines Arrays lesen.
$fruits = ["Apple", "Banana", "Watermelon", "Dragonfruit"];
$randomfruit = array_rand($fruits);

//...den Index eines Elements, welches einen bestimmten Werte enthält, finden.
$fruits = ["Apple", "banana", "Watermelon", "Dragonfruit"];
$index = array_search("Watermelon", $fruits);

//...ein bestimmtes Element aus dem Array löschen.
$fruits = ["Apple", "banana", "Watermelon", "Dragonfruit"];
unset($fruits[2]);

//...ein Element an den Anfang eines Arrays anfügen.
$number = [2, 3, 4];
array_unshift($number, 1);

//...das Element am Anfang eines Arrays entfernen.
$number = [1, 2, 3, 4];
array_shift($number);

//...ein Element an das Ende eines Arrays anfügen.
$number = [1, 2, 3];
array_push($number, 4);

//...das Element am Ende eines Arrays entfernen.
$number = [1, 2, 3, 4];
array_pop($number);

//...zählen wieviele Elemente ein Array beinhaltet.
$number = [1, 2, 3, 4];
$numberof = count($number);
