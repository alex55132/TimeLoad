<?php

//Establecemos inicio
$tiempo_inicial = microtime(true)
//Establecemos final
$tiempo_final = microtime(true)
//Calculamos final
$tiempo_definitivo = $tiempo_inicial - $tiempo_final

echo 'La página tard&oacute; '.round($tiempo_definitivo,4).' segundos en ejecutarse';
?>
