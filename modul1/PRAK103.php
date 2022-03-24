<?php

$celcius = 37.841;
$fahrenheit = number_format(((9/5 * $celcius) + 32),4);
$reamur = number_format((4/5 * $celcius),4);
$kelvin = number_format(($celcius + 273),4);

echo "Fahrenheit (F) = $fahrenheit<br/>";
echo "Reamur (R) = $reamur<br/>";
echo "Kelvin (K) = $kelvin<br/>";
?>