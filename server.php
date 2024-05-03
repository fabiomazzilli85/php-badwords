<?php

$paragrafo = $_POST["paragrafo"];
$censura = $_POST["censura"];
$paragrafo_modificato = str_replace($censura, "***", $paragrafo);
// Nella riga precedente ho creato una variabile che accetta tre argomenti (censura, *** e paragrafo). 
// Questa  variabile mi sarà utile successivamente. 
// Prende un input da censura, lo trasforma in *** e lo va a sostituire all'interno del paragrafo.  


echo "L'incipit di Anna Karenina è: " . $paragrafo . "<br>";
// Stampa a schermo il paragrafo inserito dall'utente.

echo "La lunghezza dell`incipit del romanzo è di caratteri: " . strlen ($paragrafo) . "<br>";
// Stampare a schermo la lunghezza del paragrafo inserito dall'utente.

echo "Ho censurato la parola che hai cercato. Il nuovo testo: " . $paragrafo_modificato . "<br>";
// Richiamo la variabile $paragrafo_modificato creata precedentemente.

$lunghezza_paragrafo_modificato = strlen(str_replace("***", "", $paragrafo_modificato));
echo "La lunghezza del nuovo incipit è di caratteri: " . $lunghezza_paragrafo_modificato;
// Ho creato la variabile $lunghezza_paragrafo_modificato.
// Da $paragrafo_modificato ho sottrtratto i tre asterischi sostituendoli con un argomento vuoto ("") per poi contare la lunghezza (strlen) del nuovo testo.
?>