<?php

### LES BOUCLES ###



## La boucle while() ou dîtes "tant que".

# while(condition) {
#   opération(s) que l'on souhaite effectuer
# }

$number_a = 0; // Initialisation d'un premier nombre

while ($number_a < 10) {
    var_dump("Mon nombre avant incrémentation de un est: $number_a");
    $number_a++;
    var_dump("Mon nombre après incrémentation de un est: $number_a");
}



######################################################################################

## La boucle do while()

$number_b = 10; // Initialisation d'un second nombre

# Fais {
#   opération
# } tant que (condition)

# Condition : Quand égal à zéro, j'affiche : 'b est égal à zéro'.
//do {
//
//} while ();




######################################################################################

## La boucle for

# for (initialisation ; condition ; incrémentation) {
#   opération
# }

# Exemple 1 :
for ($i = 0 ; $i < 10 ; $i++) {
    var_dump($i);
}

# Exemple 2 :
for ($c = 98 ; $c >= 0 ; $c -= 2) {
    var_dump($c);
    if ( $c == 56 || $c == 48 || $c == 2 ) var_dump("Ma variable : $c");
    if ( $c == 0 ) var_dump("Ma variable : $c");
}

# ! Important : La condition ne prend pas le ==
#               Ne peut pas aller en dessous de 0 (!=)