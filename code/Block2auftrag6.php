// Author: Naima
// Date: 2025-30-10
// Description: Dieses Skript fragt den Benutzer nach zwei Zahlen und überprüft, ob die erste Zahl durch die zweite Zahl teilbar ist.

$number1 = readline("Wie lautet die erste Zahl:");
$number2 = readline("Wie lautet die zweite Zahl:");

if($number1%$number2==0) {
    print "Die Zahl $number1 ist durch $number2 teilbar!";
} else{
    print "Die Zahl $number1 ist nicht durch $number2 teilbar!";
}
?>
