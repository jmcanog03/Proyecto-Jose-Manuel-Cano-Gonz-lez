<html>
    <h1>Listados de Usuarios</h1>
</html>

<?php
print_r($data);
echo "<table border=1>";
echo "<tr><td>Id_Usuario</td> <td>Nombre</td></tr>";
foreach ($data as $usuario){
    echo "<tr><td>".$usuario['id_usuario']."</td><td>".$usuario[' nombre']."</td></tr>";
}

echo "</table>";
//echo "<tr><td>".$usuario['nombre']."</td></tr>"."<tr><td>".$usuario['email']."</td></tr>";
?>

