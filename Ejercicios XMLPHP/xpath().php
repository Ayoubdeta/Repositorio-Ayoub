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

    // Crear un objeto SimpleXMLElement a partir de la cadena XML
    $xml = new SimpleXMLElement($note);

    // Usar XPath para buscar el elemento <to> dentro de <note>
    $result = $xml->xpath("/note/to");

    // Imprimir el resultado de la búsqueda
    print_r($result);
?>
