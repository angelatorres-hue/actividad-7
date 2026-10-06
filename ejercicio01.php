<?php
$codigoProducto = 1001;                 
$precio = 89.90;                        
$nombreProducto = "Teclado Mecánico";   
$disponible = true;                    

echo "Código de producto: " . $codigoProducto . "<br>";
echo "Nombre del producto: " . $nombreProducto . "<br>";
echo "Precio: S/ " . $precio . "<br>";
echo "Disponibilidad en stock: " . ($disponible ? "Disponible" : "Agotado") . "<br>";
?>