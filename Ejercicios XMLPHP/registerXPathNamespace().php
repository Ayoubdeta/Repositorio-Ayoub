<?php
  // Definir una cadena de texto XML que contiene información sobre un libro
  $xml = <<<XML
  <book xmlns:chap="http://example.org/chapter-title">
    <title>My Book</title>
    <chapter id="1">
      <chap:title>Chapter 1</chap:title>
      <para>Donec velit. Nullam eget tellus...</para>
    </chapter>
    <chapter id="2">
      <chap:title>Chapter 2</chap:title>
      <para>Lorem ipsum dolor sit amet....</para>
    </chapter>
  </book>
  XML;

  // Crear un objeto SimpleXMLElement a partir de la cadena XML
  $sxe = new SimpleXMLElement($xml);

  // Registrar un espacio de nombres para poder usarlo en XPath
  $sxe->registerXPathNamespace('c', 'http://example.org/chapter-title');

  // Realizar una consulta XPath para encontrar todos los títulos de los capítulos
  $result = $sxe->xpath('//c:title');

  // Iterar sobre los resultados y mostrar cada título
  foreach ($result as $title) {
      echo $title . "<br>";
  }
?>
