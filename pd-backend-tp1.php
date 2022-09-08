<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 1</title>
</head>
<body>

<h1>Ejercicio 1</h1>

<?php 

echo "hola mundo";

?>

<br><hr>

<h1>Ejercicio 2</h1>

<?php 

$mensaje = "hola mundo";

echo $mensaje;

?>

<br><hr>

<h1>Ejercicio 3</h1>

<?php 
$perros = 10;
$gatos = 8;
?>

<br>

<?php 
$suma = $perros + $gatos;
echo $suma;
?>

<br>

<?php 
$resta = $perros - $gatos;
echo $resta;
?>

<br>

<?php 
$multiplicacion = $perros * $gatos;
echo $multiplicacion;
?>

<br>

<?php 
$division = $perros / $gatos;
echo $division;
?>

<br>

<?php 
$resto = $perros % $gatos;
echo $resto;
?>

<br><hr>

<h1>Ejercicio 4</h1>

<?php 
$celsius = 20;

?>

<br>

<?php 
$f = (($celsius * 1.8) + 32);
echo "grados Fahrenheit =" . $f;
?>

<br><hr>

<h1>Ejercicio 5</h1>

<p>a)<p>

<?php 
$base = 18;
$altura = 12;

?>

<?php 
$perimetro = (($base + $altura) * 2);
echo "perimetro =" . $perimetro;
?>

<br>

<?php 
$area = ($base * $altura);
echo "area =" . $area;
?>

<p>b)<p>

<?php 
$radio = 30;
$py = 3.14;
$diametro = 2;
?>

<?php 
$perimetro= (($py * $radio) * $diametro);
echo "perimetro =" . $area;
?>
<br>

<?php 
$area = (($radio * $radio) * $py);
echo "area =" . $area;
?>



</body>
</html>