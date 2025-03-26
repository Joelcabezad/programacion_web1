<?php

$arepa = $_POST['arepa'];
$perro = $_POST['perro'];
$hamburgesa = $_POST['hamburgesa'];

//echo $arepa.' '.$perro.' '.$hamburgesa;

$subtotal = ($arepa * 3000) + ($perro * 5000) + ($hamburgesa * 10000);
$iva = $subtotal * 0.19;
echo 'Subtotal:'.$subtotal.'<br>';
echo 'Iva:'.$iva;

?>