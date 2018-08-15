<?php

### OPÉRATIONS SUR LES CHAÎNES DE CARACTÈRES ###



## Échappement de caractères
############################

# Pour échapper un caractère dans une string, on utilise l'antislash : \
# Se place avant le caractère que l'on souhaite échapper
# Exemple :
$ma_string_1 = 'Bonjour je m\'appelle Benjamin';
$mon_emote   = '\\m/';

$ma_string_2_single_quotes = 'Bonjour, un nombre inconnu: \n . Tada';
$ma_string_2_double_quotes = "Bonjour, un nombre inconnu: \n . Tada";



/**********************************************************************************************************************/



## Concaténation
################

$firstname = 'Ben';
$lastname  = 'Lmsc';
$age       = 24;

# Hello, my name is $firstname $lastname. I'm $age.
$concatenation_1 = 'Hello, my name is '. $firstname .' '. $lastname .'. I\'m '. $age .'.';
$concatenation_2 = "Hello, my name is $firstname $lastname. I'm $age.";


# ! Important : la concaténation avec les double quotes ne fonctionne pas en présence d'une variable de type array :
#               array['key'].
