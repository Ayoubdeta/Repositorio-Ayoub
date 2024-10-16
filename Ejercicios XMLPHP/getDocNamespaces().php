<?php
  // Definir una cadena de texto XML que incluye un espacio de nombres
  $xml=<<<XML
  <?xml version="1.0" standalone="yes"?>
  <cars xmlns:c="http://w3schools.com/ns">
    <c:car id="1">Volvo</c:car>
    <c:car id="2">BMW</c:car>
    <c:car id="3">Saab</c:car>
  </cars>
  XML;

  // Crear un objeto SimpleXMLElement a partir de la cadena XML
  $sxe=new SimpleXMLElement($xml);

  // Obtener todos los espacios de nombres definidos en el documento XML
  $ns=$sxe->getDocNamespaces();

  // Imprimir los espacios de nombres en forma de array
  print_r($ns);
?>
