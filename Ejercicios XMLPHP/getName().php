<?php
  // Definir una cadena de texto XML que contiene una lista de coches
  $xml=<<<XML
  <?xml version="1.0" standalone="yes"?>
  <cars>
    <car id="1">Volvo</car>
    <car id="2">BMW</car>
    <car id="3">Saab</car>
  </cars>
  XML;

  // Crear un objeto SimpleXMLElement a partir de la cadena XML
  $sxe=new SimpleXMLElement($xml);

  // Obtener el nombre del elemento 'cars' y mostrarlo
  echo $sxe->getName() . "<br>";

  // También imprimir los nombres de los hijos del elemento 'cars'
  foreach ($sxe->children() as $child)
    {
    // Mostrar el nombre de cada elemento hijo (cada coche)
    echo $child->getName() . "<br>";
    }
?>
