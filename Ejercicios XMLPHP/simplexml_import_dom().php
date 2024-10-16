<?php
    // Crear un nuevo objeto DOMDocument
    $dom = new DOMDocument;

    // Cargar una cadena XML en el objeto DOM
    $dom->loadXML("<note><to>Tove</to><from>Jani</from></note>");

    // Importar el objeto DOM en un objeto SimpleXMLElement
    $x = simplexml_import_dom($dom);

    // Imprimir el contenido del elemento <from>
    echo $x->from;
?>
