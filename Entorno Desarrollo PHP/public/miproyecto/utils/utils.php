<?php 

function filtrado ($datosfiltrar){
    $datosfiltrar=trim($datosfiltrar);
    $datosfiltrar=stripslashes($datosfiltrar);
    $datosfiltrar=htmlspecialchars($datosfiltrar);
    return $datosfiltrar;
}

?>