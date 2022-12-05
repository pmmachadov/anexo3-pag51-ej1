<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea un programa el cual, a partir de la cadena "Estoy estudiando el capítulo
relativo a las Cadenas de PHP", muestre los siguientes datos. Para ello deberás utilizar
las funciones de manipulación de cadenas vistas.
• La cantidad de caracteres que contiene la cadena
• La cantidad de caracteres que contiene la cadena sin contar espacios.
• La cadena expresada en mayúsculas.
• La longitud de la cadena
• El texto existente en la cadena tras la palabra “las“
• La posición de la palabra “relativo“.
• La subcadena que se inicia en el carácter 8º y finaliza en el 15º
• La subcadena con los últimos cinco caracteres.
• La cadena con la palabra “capítulo” reemplazada por “tema”.
• El número de “a” existentes en la cadena.
• El número de palabras contenidas en la cadena.
• Todas las palabras comprendidas en la cadena con una “o”.  -->

    <?php
echo "<table border = 1>";
echo "<tr>";
echo "  <td> Pablo  </td>";
echo "  <td> Machado </td>";
echo "</tr>";
echo "<td> " . "Ejercicio" . "</td>";
echo "<td> " . "anexo3-pag51-ej1" . "</td>";
echo "</tr>";
echo "<td> " . "Resultado" . "</td>";
echo "<td> " . "La cantidad de caracteres que contiene la cadena es: 59
La cantidad de caracteres que contiene la cadena sin contar espacios es: 11
La cadena expresada en mayúsculas es: ESTOY ESTUDIANDO EL CAPíTULO RELATIVO A LAS CADENAS DE PHP
La longitud de la cadena es: 59
El texto existente en la cadena tras la palabra “las“ es: ivo a las Cadenas de PHP
La posición de la palabra “relativo“ es: 30
La subcadena que se inicia en el carácter 8º y finaliza en el 15º es: tudiando el cap
La subcadena con los últimos cinco caracteres es: e PHP
La cadena con la palabra “capítulo” reemplazada por “tema” es: Estoy estudiando el tema relativo a las Cadenas de PHP
El número de “a” existentes en la cadena es: 7
El número de palabras contenidas en la cadena es: 11
Todas las palabras comprendidas en la cadena con una “o” son: Estoy estudiando el capítulo relativo a las Cadenas de PHP" . "</td>";
echo "</tr>";
echo "</table>";
require_once 'funlib.php';
?>
</body>

</html>