<html>
    <h1>Listados de Usuarios</h1>
</html>

<?php

echo "<table border=1>";
echo "<tr><td>Nombre</td> <td>Email</td></tr>";
foreach ($data as $usuario){
    echo "<tr><td>".$usuario['nombre']."</td><td>".$usuario['email']."</td></tr>";
}

echo "</table>";
//echo "<tr><td>".$usuario['nombre']."</td></tr>"."<tr><td>".$usuario['email']."</td></tr>";
?>

