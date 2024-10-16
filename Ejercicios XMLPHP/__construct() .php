<?php
    $note=<<<XML
        <note>
        <to>Tove</to> <!-- esto significa que va para Tove -->    
        <from>Jani</from>   <!-- Quién envía la carta -->
        <heading>Reminder</heading> <!-- El título -->
        <body>Do not forget me this weekend!</body>  <!-- El mensaje -->
        </note>
    XML;

    $xml=new SimpleXMLElement($note); //SimpleXMLElement, que permite trabajar con texto XML como si fuera un objeto.
    echo $xml->asXML(); // imprime o muestra el mensaje del contenido del XML en la pantalla.
?>