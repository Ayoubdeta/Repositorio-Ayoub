<?php
    $xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>"); 
    #  El SimpleXMLElement es una herramienta en PHP que convierte un texto en formato XML en un objeto que PHP puede entender y manipular
    echo $xml;
    # hace un print del contenido xml
?>