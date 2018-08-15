<?php

### LES TABLEAUX ###


## Déclaration d'un array de base (simple)

# Première façon de déclarer un array
# Déclaration dans bon nombre de langages
# Utilisable depuis la version 5.4.x
$array_1 = ['a', 1, 22, 'Une chaine quelconque', false, true, 1.2];


# Seconde façon de déclarer un array
# Propre à PHP
$array_2 = array(
    'a',                        // index 0
    1,                          // index 1
    22,                         // index 2
    'Une chaine quelconque',    // index 3
    false,                      // ...
    true,
    1.2
);

# Un array commence toujours à l'index 0
$get = $array_2[3];
var_dump($get);




/**********************************************************************************************************************/


## Déclaration d'un array associatif

$lastname = 'Lmsc';
# Qui dit associatif dit association. Nous allons retrouver dans notre array un système de clé (key) / valeur (value).
# Se présente ainsi : array('key' => 'value')
$associative_array = array(
    'firstname' => 'Ben',
    'lastname' => $lastname,
    123 => 'Ceci est le nombre 123'
);

$sentence = 'Je m\'appelle '. $associative_array['firstname'] .' '. $associative_array['lastname'] .'.';
var_dump($sentence);
