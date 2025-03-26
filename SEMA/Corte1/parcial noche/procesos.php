<?php //definimos que es un tipo php
$tipo = $_POST["tipo"];
$cantidad = $_POST["cantidad"];//son varibles
if($cantidad <=0 ) {
    echo"seleccione al menos 1";
    exit;
}
$tipo = $_POST["tipo"];
$valor = 0;

if ($tipo == 1) {
    $valor = 300;
}
elseif ($tipo == 2) {
    $valor = 400;
}
elseif( $tipo == 3){
    $valor = 500;
}

$total = $valor * $cantidad;
$descuento = 0;
if ($cantidad >= 21 && $cantidad <= 40){
    $descuento = 0.005;
} elseif($cantidad >= 41){
    $descuento = 0.10;
}
$descuentototal = $total* $descuento;
$totalpagar = $total - $descuentototal;

echo"subtotal:$". $total;
echo "descuento:$" . $descuentototal;
echo"total a pagar:$". $totalpagar;
?>