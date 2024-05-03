<?php

$paragrafo = $_POST["paragrafo"];
$censura = $_POST["censura"];

echo "Il tuo motto è..." . $paragrafo . "<br>";
// Stampa a schermo il paragrafo inserito dall'utente.

echo "La lunghezza del paragrafo è di caratteri: " . strlen ($paragrafo) . "<br>";
// Stampare a schermo la lunghezza del paragrafo inserito dall'utente.

echo "Il paragrafo in uppercase è: " . strtoupper ($paragrafo) . "<br>";
// Converte il paragrafo inserito dall'utente in uppercase.

echo "Ho censurato la tua parola con: " . str_replace($censura, "***", $censura);
?>