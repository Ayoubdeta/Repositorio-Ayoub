<?php
    // Definición de una cadena XML que representa una nota
    $note = <<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>Do not forget me this weekend!</body>
    </note>
    XML;

    // Cargar la cadena XML en un objeto SimpleXMLElement
    $xml = simplexml_load_string($note);

    // Imprimir la estructura y el contenido del objeto SimpleXMLElement
    print_r($xml);
?>
