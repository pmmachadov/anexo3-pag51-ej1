<?php
$cadena = "Estoy estudiando el capítulo relativo a las Cadenas de PHP";
echo "La cantidad de caracteres que contiene la cadena es: " . strlen($cadena) . "<br>";
echo "La cantidad de caracteres que contiene la cadena sin contar espacios es: " . str_word_count($cadena) . "<br>";
echo "La cadena expresada en mayúsculas es: " . strtoupper($cadena) . "<br>";
echo "La longitud de la cadena es: " . strlen($cadena) . "<br>";
echo "El texto existente en la cadena tras la palabra “las“ es: " . substr($cadena, 35) . "<br>";
echo "La posición de la palabra “relativo“ es: " . strpos($cadena, "relativo") . "<br>";
echo "La subcadena que se inicia en el carácter 8º y finaliza en el 15º es: " . substr($cadena, 8, 15) . "<br>";
echo "La subcadena con los últimos cinco caracteres es: " . substr($cadena, -5) . "<br>";
echo "La cadena con la palabra “capítulo” reemplazada por “tema” es: " . str_replace("capítulo", "tema", $cadena) . "<br>";
echo "El número de “a” existentes en la cadena es: " . substr_count($cadena, "a") . "<br>";
echo "El número de palabras contenidas en la cadena es: " . str_word_count($cadena) . "<br>";
echo "Todas las palabras comprendidas en la cadena con una “o” son: " . str_replace("o", "o", $cadena) . "<br>";
?>