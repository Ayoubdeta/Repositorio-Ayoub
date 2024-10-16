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

// Crear un objeto SimpleXMLIterator a partir de la cadena XML
$xml = new SimpleXMLIterator($note);

// Reiniciar el puntero del iterador al primer elemento
$xml->rewind();

// Verificar si el puntero del iterador es válido (es decir, si hay un elemento actual)
var_dump($xml->valid()); // Esto debería devolver true ya que el puntero apunta al primer elemento <to>

// Mover el puntero al siguiente elemento
$xml->next();

// Verificar si el puntero del iterador sigue siendo válido después de avanzar
var_dump($xml->valid()); // Esto debería devolver true, ya que ahora debería apuntar al segundo elemento <from>
?>
