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

    // Agregar un elemento hijo al elemento body
    $xml->body->addChild("date","2014-01-01");

    // Agregar un elemento hijo después del último elemento dentro de note
    $footer = $xml->addChild("footer","Some footer text");

    echo $xml->asXML();
?>
