<?php

$alter = readline("Wie alt bist du?");
$name = readline("Wie heisst Du?");

if ($alter < 18){print "Du heisst $name und bist $alter alt";}
else {print "Sie heissen $name und sie sind $alter alt";}
?>
