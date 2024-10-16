<?php
    $note=<<<XML
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = new SimpleXMLIterator($note);

    // Reiniciar el puntero al primer elemento
    $xml->rewind();

    // Devolver el elemento actual
    var_dump($xml->current());
?>
