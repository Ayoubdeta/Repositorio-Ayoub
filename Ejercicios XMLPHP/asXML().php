<?php
    $note=<<<XML
    <note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = new SimpleXMLElement($note);

    // Imprimir el XML en formato de cadena
    echo $xml->asXML();
?>
