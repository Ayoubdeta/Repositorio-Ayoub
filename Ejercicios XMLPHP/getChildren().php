<?php
  // Definir una cadena de texto XML que contiene una lista de libros
  $bookxml = <<<XML
  <bookstore>
    <book>
      <title>Everyday Italian</title>
      <author>Giada De Laurentiis</author>
    </book>
    <book>
      <title>Harry Potter</title>
      <author>J K. Rowling</author>
    </book>
    <book>
      <title>Learning XML</title>
      <author>Erik T. Ray</author>
    </book>
  </bookstore>
  XML;

  // Crear un objeto SimpleXMLIterator con la cadena XML
  $xml = new SimpleXMLIterator($bookxml);

  // Recorrer todos los elementos hijos del XML (libros en este caso)
  for( $xml->rewind(); $xml->valid(); $xml->next() ) {
    // Verificar si el elemento actual (book) tiene elementos hijos (title, author)
    if($xml->hasChildren()) {
      // Mostrar el contenido del elemento actual (book) usando var_dump()
      var_dump($xml->current());
      echo "<br>"; // Insertar un salto de línea para la visualización en HTML
    }
  }
?>
