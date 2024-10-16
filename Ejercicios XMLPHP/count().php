<?php
  $xml=<<<XML
    <cars>
      <car name="Volvo">
      <child/>
      <child/>
      <child/>
      <child/>
    </car>
    <car name="BMW">
      <child/>
      <child/>
    </car>
  </cars>
  XML;

  $elem=new SimpleXMLElement($xml);

  // Iterar sobre cada elemento car y mostrar el nombre del coche y la cantidad de elementos hijo
  foreach ($elem as $car)
    {
    printf("%s tiene %d hijos.<br>", $car['name'], $car->count());
    }
?>
