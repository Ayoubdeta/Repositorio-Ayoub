<?php
// Definición de una cadena de texto XML que representa una nota
$note = <<<XML
<note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
</note>
XML;

// Crear un objeto SimpleXMLIterator a partir de la cadena XML
$xml = new SimpleXMLIterator($note);

// Reiniciar el puntero del iterador al primer elemento
$xml->rewind();

// Devolver el elemento actual (el primer elemento en este caso)
var_dump($xml->current());
?>
