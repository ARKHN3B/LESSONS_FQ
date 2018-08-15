<?php
/**
 * 01) Résoudre les opérations suivantes :
 *
 * Départ   : 23 multiplié par 5
 * Résultat : divisé par 2
 * Résultat : Ajout de 1
 * Résultat : Soustraction de 5.67
 * Résultat : Modulo de 3
 *
 * Écrire le résultat final sous la forme d'un string selon la méthode que vous souhaitez :
 * "Le résultat de l'inconnu n est : $result.
 *  Mon numéro de départ était : $init."
 */

$init = 23;

$result_1 = (((((($init * 5) / 2) ) + 1) - 5.67 ) % 3);


$init = $init * 5;
$init = $init / 2;
$init = $init + 1;
$init = $init - 5.67;
$init = $init % 3;

$result_2 = $init;



$init = 23;

$init *= 5; // $init = $init (self) * 5
$init /= 2;
$init += 1;
$init -= 5.67;
$init %= 3;

$result_3 = $init;

var_dump($result_3);



