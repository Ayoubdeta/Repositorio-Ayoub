<?php
    // Definir una cadena de texto XML que contiene una nota
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

    // Devolver la clave del elemento actual
    var_dump($xml->key());
?>
