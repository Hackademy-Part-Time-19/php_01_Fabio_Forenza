<?php
$corsoHackademy = [ "docenti" => ["daniele", "emanuele", "Mattia"], "studenti" => ["Antonio",
"franco", "Fabio", "Domenico"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];

$result = "Sono " .$corsoHackademy['studenti'][2] ." e sto svolgendo gli esercizi con " .$corsoHackademy['studenti'][3] 
." ed il nostro professore si chiama " .$corsoHackademy['docenti'][1] ."\n";
echo $result ;