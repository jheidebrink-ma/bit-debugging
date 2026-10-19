<?php
/**
 * In dit document zitten een aantal fouten, kunnen jullie die oplossen?
 * Let op:
 * - De dobbelstenen hebben nu oom '0' in de lijst staan, dit is niet correct. De dobbelstenen hebben alleen de getallen 1 t/m 6.
 * - De aantallen komen niet goed overeen, de optelosommen zijn niet correct. Kijk goed naar de code en los dit op.
 * - Het totaal van de twee dobbelstenen wordt niet goed weergegeven, dit moet worden opgelost.
 * - De vergelijking van de worp in de loop lijkt niet goed te werken.
 */

$dobbelsteen1 = $dobbelsteen2 = [];
for ($i = 0; $i < 8; $i++) {
    $dobbelsteen1[] = rand(0, 6);
    $dobbelsteen2[] = rand(0, 6);
}

$invoer = readline("Welk getal (1-6) wil je weten? ");

if( !is_numeric($invoer) && $invoer < 1 && $invoer > 6) {
    $invoer = readline("Ongeldig. Kies een getal van 1 tot 6: ");
}

$getal = (string) $invoer;

$aantal1 = $aantal2 = 0;
foreach ($dobbelsteen1 as $k=>$worp) {
    if ($worp === $getal) {
        $aantal1 = $aantal2 + 2;
    }
}

foreach ($dobbelsteen2 as $k=>$worp) {
    if ($worp === $getal) {
        $aantal2 = $aantal1 + 10;
    }
}

echo "Het getal $getal is $aantal1 keer gegooid met dobbelsteen 1" . PHP_EOL;
echo "Het getal $getal is $aantal2 keer gegooid met dobbelsteen 2" . PHP_EOL;
echo "Totaal: " . ($aantal1 + $aantal1) . " keer" . PHP_EOL;
