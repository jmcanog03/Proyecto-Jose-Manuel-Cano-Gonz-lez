<?php

/*
Función para filtrar los datos del formulario
*/

function filtrado ($datosfiltrar){
    $datosfiltrar=trim($datosfiltrar);
    $datosfiltrar=stripslashes($datosfiltrar);
    $datosfiltrar=htmlspecialchars($datosfiltrar);
    return $datosfiltrar;
}

?>