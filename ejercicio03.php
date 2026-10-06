<?php
$edad = 20;                            
$promedioCalificaciones = 17.5;        
$nombreCompleto = "Ana María Torres";  
$inscripcionActiva = true;             

echo "Nombre del estudiante: " . $nombreCompleto . "<br>";
echo "Edad: " . $edad . " años<br>";
echo "Promedio de calificaciones: " . $promedioCalificaciones . "<br>";
echo "Estado de inscripción: " . ($inscripcionActiva ? "Activa" : "Inactiva") . "<br>";
?>