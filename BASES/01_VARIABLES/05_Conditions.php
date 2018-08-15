<?php

### Conditions ###

# Les opérateurs de conditions sont :
# ==, <, >, <=, >=, !=

/* Premier personnage : 12 ans  */
$character_1_age = 12;

/* Si STRICTEMENT ÉGAL */
if ($character_1_age == 12) {
    echo "Notre personnage a pile poil douze ans !";
}
/* Sinon si INFÉRIEUR */
elseif ($character_1_age < 12) {
    echo "Notre personnage a moins de douze ans !";
}
/* Sinon si SUPÉRIEUR */
elseif ($character_1_age > 12) {
    echo "Notre personnage a plus de douze ans !";
}
/* Sinon si INFÉRIEUR OU ÉGAL */
elseif ($character_1_age <= 12) {
    echo "Notre personnage a douze ans ou moins !";
}
/* Sinon si SUPÉRIEUR OU ÉGAL */
elseif ($character_1_age >= 12) {
    echo "Notre personnage a douze ans ou plus !";
}
/* Sinon si DIFFÉRENT */
elseif ($character_1_age != 12) {
    echo "Notre personnage n'a pas douze ans !";
}
else {
    echo "Je ne sais pas !";
}


# Les opérateurs OR et AND
$character_2_age = 23;
$character_3_age = 18;

if ($character_2_age >= 18 && $character_3_age >= 18) {
    echo "Ils sont majeurs";
}
elseif ($character_1_age >= 18 || $character_3_age >= 18) {
    echo "Ils sont majeurs";
}
else {
    echo "Un des personnages n'est pas majeur !";
}

### Les opérators OR (||) et AND (&&) possèdent les logiques suivantes :


#### Logical AND (&&) :

## false && false =>  FALSE

## false && true  =>  FALSE

## true && false  =>  FALSE

## true && true   =>  TRUE

# Note : Si une seule variable/condition est fausse, alors le résultat de la condition globale sera FALSE.


/**********************************************************************************************************************/


#### Logical OR (||) :

## false || false =>  FALSE

## false || true  =>  TRUE

## true || false  =>  TRUE

## true || true   =>  TRUE

# Note : Si une seule variable/condition est vrai, alors le résultat de la condition globale sera TRUE.


/**********************************************************************************************************************/


#### Logical NOT (!) :

## !false =>  TRUE

## !true  =>  FALSE
