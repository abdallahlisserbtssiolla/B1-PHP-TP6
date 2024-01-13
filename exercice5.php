<?php

$liaisons = array(
    "Belle-Ile-en-Mer:15:8.3:Quiberon:Le Palais",
    "Belle-Ile-en-Mer:24:9:Le Palais:Quiberon",
    "Belle-Ile-en-Mer:16:8:Quiberon:Sauzon",
    "Belle-Ile-en-Mer:17:7.9:Sauzon:Quiberon",
    "Belle-Ile-en-Mer:19:23.7:Vannes:Le Palais",
    "Belle-Ile-en-Mer:11:25.1:Le Palais:Vannes",
    "Houat:25:8.8:Quiberon:Port St Gildas",
    "Houat:30:8.8:Port St Gildas:Quiberon",
    "Ile de Groix:21:7.7:Lorient:Port-Tudy",
    "Ile de Groix:22:7.4:Port-Tudy:Lorient"
);

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
