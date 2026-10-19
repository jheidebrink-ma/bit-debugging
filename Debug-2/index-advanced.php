<?php

/**
 * In dit document zitten een aantal elementen die niet goed werken, kunnen jullie die oplossen?
 * Let op:
 * - De array met gerechten is correct, maar de weergave van de gerechten is niet correct. Kijk goed naar de code en los dit op.
 * - De input van de gebruiker kan groter zijn dan de array met gerechten groot is.
 * - De input van de gebruiker kan kleiner zijn dan 1.
 * - Als ik een gerecht kies, dan wordt de titel en omschrijving niet weergegeven van dat gerecht.
 * - Optimaliseer de code waar mogelijk, er zitten nu dubbele codes in en loops die niet nodig zijn. Kijk goed naar de code en los dit op.
 */

$gerechten = [
    [
        "titel" => "Stampot",
        "omschrijving" => "Hollandse aardappelpuree met groenten en rookworst.",
        "ingredienten" => ["Aardappelen", "Boerenkool", "Rookworst", "Boter", "Melk"],
    ],
    [
        "titel" => "Roti",
        "omschrijving" => "Surinaams gerecht met platbrood, kip en groenten.",
        "ingredienten" => ["Rotibrood", "Kip", "Aardappelen", "Kousenband", "Masala"],
    ],
    [
        "titel" => "Falafel",
        "omschrijving" => "Gefrituurde kikkererwtenballetjes uit het Midden-Oosten.",
        "ingredienten" => ["Kikkererwten", "Peterselie", "Knoflook", "Komijn", "Ui"],
    ],
    [
        "titel" => "Mac and cheese",
        "omschrijving" => "Macaroni in een romige kaassaus.",
        "ingredienten" => ["Macaroni", "Cheddar", "Melk", "Boter", "Bloem"],
    ],
    [
        "titel" => "Noodle soep",
        "omschrijving" => "Hartige bouillon met noedels en groenten.",
        "ingredienten" => ["Noedels", "Bouillon", "Wortel", "Lente-ui", "Sojasaus"],
    ],
    [
        "titel" => "Pizza",
        "omschrijving" => "Italiaanse bodem met tomatensaus en kaas.",
        "ingredienten" => ["Pizzadeeg", "Tomatensaus", "Mozzarella", "Basilicum"],
    ],
    [
        "titel" => "Lasagna",
        "omschrijving" => "Laagjes pasta met gehakt, tomatensaus en bechamel.",
        "ingredienten" => ["Lasagnebladen", "Gehakt", "Tomatensaus", "Bechamelsaus", "Kaas"],
    ],
    [
        "titel" => "Nasi goreng",
        "omschrijving" => "Indonesische gebakken rijst met kruiden en ei.",
        "ingredienten" => ["Rijst", "Ei", "Ketjap", "Knoflook", "Ui"],
    ],
];

echo "Gerechten:" . PHP_EOL;
foreach ($gerechten as $nummer => $gerecht) {
    echo ($nummer + 1) . ". " . $gerecht["titel"] . PHP_EOL;
}

$aantal = count($gerechten);
$invoer = readline("Kies een nummer (1-$aantal): ");

if (!ctype_digit($invoer) ){
    $invoer = readline("Ongeldig. Kies een nummer van 1 tot $aantal: ");
}
if ($invoer < 1 ){
    $invoer = readline("Ongeldig. Kies een nummer van 1 tot $aantal: ");
}
    
foreach ($gerechten as $nummer => $gerecht) {
    if ($nummer !== $invoer) {
        continue;
    }

    echo PHP_EOL . $gerecht["titel"] . PHP_EOL;
    echo $gerecht["omschrijving"] . PHP_EOL;
    echo "Ingredienten:" . PHP_EOL;
    foreach ($gerecht["ingredienten"] as $ingredient) {
        echo "- " . $ingredient . PHP_EOL;
    }
}
