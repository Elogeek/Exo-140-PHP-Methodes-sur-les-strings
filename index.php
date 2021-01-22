<?php

// Compléter le code ci dessous pour afficher la longueur de la chaine de caracteres
$text = "google";
echo  strlen ($text);

echo"<br><br>"; //Decommentez les <br> pour tester l'affichage lorsque vous aurez plusieurs instructions

// Compléter le code ci dessous pour inverser la chaine de caractere

echo strrev ("anticonstitutionellement");

// Et si vous testiez également avec votre prénom ?

$name = "Eloggek";
echo strrev($name);

echo"<br><br>";

// Compléter le code ci dessous pour remplacer le mot ok par non
$oldtxt = "Ok Google!";
$newtxt = str_replace("Ok","non",$oldtxt );

echo $newtxt;