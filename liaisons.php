<?php

$liaisons = array( 
    "Belle-Ile-en-Mer:15:8.3:Quiberon:Le Palais " ,
    "Belle-Ile-en-Mer:24:9:Le Palais:Quiberon " ,
    "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon " ,
    "Belle-Ile-en-Mer:17:7.9:Sauzon:Quiberon " ,
    "Belle-Ile-en-Mer:19:23.7:Vannes:Le Palais " ,
    "Belle-Ile-en-Mer:11:25.1:Le Palais:Vannes " ,
    "Houat:25:8.8:Quiberon:Port St Gildas " ,
    "Houat:30:8.8:Port St Gildas:Quiberon " ,
    "Ile de Groix:21:7.7:Lorient:Port-Tudy " ,
    "Ile de Groix:22:7.4:Port-Tudy:Lorient "
);

// Exercice 1
echo "\n\nCodes des liaisons :\n\n";
sort($liaisons);
for ($i = 0; $i < count($liaisons); $i++) {
    $code = explode(":", $liaisons[$i])[1];
    echo "\t- $code\n";
}

// Exercice 2
echo "\n\nCodes des liaisons du secteur d'Houat :\n\n";
$liaisonsHouat = array();

for ($i = count($liaisons) - 1; $i >= 0; $i--) {
    if (strpos($liaisons[$i], 'Houat') !== false) {
        $liaisonsHouat[] = array_splice($liaisons, $i, 1)[0];
    }
}

usort($liaisonsHouat, function ($a, $b) {
    return explode(":", $a)[1] - explode(":", $b)[1];
});

foreach ($liaisonsHouat as $liaison) {
    echo "\t- " , explode(":", $liaison)[1] , "\n";
}

// Exercice 3
asort($liaisons);
echo "Codes des liaisons qui desservent le port de Quiberon :\n";

foreach ($liaisons as $liaison) {
    if (strpos($liaison, ":Quiberon ") !== false) {
        echo "- " . explode(":", $liaison)[1] . "\n";
    }
}

// Exercice 4
echo "\nListe des ports :\n\n";
$ports = array_map(function ($liaison) {
    return explode(":", $liaison)[3];
}, $liaisons);

$portsUniques = array_unique($ports);
sort($portsUniques);

foreach ($portsUniques as $port) {
    echo "\t- $port\n";
}

// Exercice 5
$nomsPortsEnMajuscules = array(); 

foreach ($liaisons as $liaison) {
    $elements = explode(':', $liaison); 
    $elements[3] = strtoupper($elements[3]); 
    $elements[4] = strtoupper($elements[4]); 

    $liaisonMajuscule = implode(':', $elements);
    $nomsPortsEnMajuscules[] = $liaisonMajuscule;
}

echo "\n\nNoms des ports en lettres majuscules :\n\n";
print_r($nomsPortsEnMajuscules);

?>
