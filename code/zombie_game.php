<?php

/*
Author: Naima
Date: 7-11-2025
Description: A game where the player has to survive a zombie apocalypse.
*/

function question($text) {
    print($text);
    $answer= trim(fgets(STDIN));
    return $answer; //eyy this is rückgabe okeyy
}

print("Willkommen zum Zombie-Abenteuer!\n");
print("Wie heisst du?");
$name = trim(readline(" Deine Antwort:\n"));
print("Hallo $name! Du wachst in einer Stadt auf, die von einer Zombie-Apokalypse betroffen war...\n");

// scenario start
print("\nDu siehst eine dunkle Gasse und eine helle Strasse.\n");
print("1) ...In die Gasse gehen.\n");
print("2) ...Auf der Strasse bleiben.\n");

$choice1 = question("Wähle 1 oder 2: ");
if ($choice1 == "1") {
    print("\nIn der Gasse hörst du ein leises Stöhnen... und siehst DREI Zombies! Es sind deine Kolleginnen Teopedora, Shivina und Irem...\n");
    print("1) Kämpfen!\n");
    print("2) Wegrennen...\n");
    $choice2 = question("Was machst du (1/2)? ");

    if ($choice2 == "1") {
        print("\nDu kämpfst tapfer, aber die Zombies sind leider zu stark...\n");
        print("GAME OVER!!!\n");
    } else {
        print("\nDu rennst weg von deinen infizierten Freunden und findest eine kleine Hütte.\n");
        print("Drinnen ist Essen und ein funktionierendes Walkie-Talkie. Für jetzt bist du noch sicher!\n");
    }

//Szene 2
   print("\nWas machst du jetzt?\n");
   print("1) Das Funkgerät einschalten\n");
   print("2) Etwas essen und schlafen\n");
   $choice3 = question("Wähle 1 oder 2: ");

    if ($choice3 == "1") {
        print("\nDu hörst eine Stimme über das Funkgerät: ''Hier ist Marija, ich kann dich retten!''\n");
        print("Sie gibt dir die Richtungen für ein sicheres Lager.\n");

//Szene 3
          print("\nDu verlässt die Hütte und gehst in die Richtung des Lagers.\n");
          print("Beim Laufen hörst du laute Geräusche aus einem Gebäude.\n");
          print("1) Geh nachschauen, was dort ist...\n");
          print("2) Schnell weiterlaufen...\n");

            $choice4 = question("Was machst du (1/2)? ");

            if ($choice4 == "1") {
                print("\nDu öffnest vorsichtig die Tür... drinnen sind andere Überlebende!\n");
                print("Sie nehmen dich mit und bringen dich in Sicherheit! Du hast überlebt, $name!\n");
            } else {
                print("\nDu rennst weiter und stolperst. Du und wirst von Zombies entdeckt und infiziert.\n");
                print("GAME OVER!!!\n");
            }

        } else {
            print("\nDu schläfst ein... aber in der Nacht brechen Zombies in die Hütte ein und infizieren dich.\n");
            print(" GAME OVER!!!\n");
        }
    }

    else {
// Szene 4
    print("\nDu bleibst auf der Strasse. Es ist ruhig, aber unheimlich.\n");
    print("Plötzlich hörst du Schritte hinter dir...\n");
    print("Du drehst dich um: es ist deine Kollegin Marija!\n");
    print("Sie ist nicht infiziert und bietet dir an, mit ihr zu einem sicheren Ort zu gehen.\n");

    print("\n1) Mit Marija gehen\n");
    print("2) Ihr nicht vertrauen und allein weitergehen\n");
    $choice5 = question("Was machst du (1/2)? ");

    if ($choice5 == "1") {
        print("\nIhr geht gemeinsam und ihr erreicht einen alten Bunker.\n");
        print("Drinnen sind andere Überlebende: Du bist in Sicherheit!\n");
    } else {
        print("\nDu gehst allein weiter... doch bald wirst du von Zombies umzingelt und infiziert..\n");
        print("GAME OVER!!!\n");
    }
}

print("\nDanke fürs Spielen, $name!\n");
?>
