<?php

$paragrafo = $_POST["paragrafo"];

echo "Il tuo motto è..." . $paragrafo;
// Stampa a schermo il paragrafo inserito dall'utente.

echo strlen ($paragrafo);
// Stampare a schermo la sua lunghezza del paragrafo inserito dall'utente.

echo strtoupper ($paragrafo);
// Converte il paragrafo inserito dall'utente in uppercase.
?>