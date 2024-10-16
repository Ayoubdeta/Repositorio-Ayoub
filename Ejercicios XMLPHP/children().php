<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml=simplexml_load_string($note);

// Iterar sobre los elementos hijos de note y mostrarlos
foreach ($xml->children() as $child)
  {
  echo "Nodo hijo: " . $child . "<br>";
  }
?>
