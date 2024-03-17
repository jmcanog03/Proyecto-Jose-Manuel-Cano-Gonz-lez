<?php
include_once ('models/UserDAO.php');
include_once('views/view.php');
include_once('utils/utils.php');

class UserController
{
    public function getAllUser()
    {
        $userDao = new UserDao();

        // recuperar datos

        $arrayUsuarios = $userDao -> getAllUsers();
        View::show('usersview', $arrayUsuarios);
    }




    function addUser()
    {
        $erroresForm = array();
        if (isset($_POST['registro'])) {
            // Validar el nombre
            if (empty($_POST['nombre']))
                $erroresForm['nombre'] = "El nombre no puede estar vacío";

            if (empty($_POST['contrasena']))
                $erroresForm['contrasena'] = "Debes introducir una contraseña";

            if (empty($_POST['rol']))
                $erroresForm['rol'] = "Debes introducir un rol para agregarte a la base de datos";

            if (count($erroresForm) == 0) {
                $nombre = filtrado($_POST['nombre']);
                $contraseña = filtrado($_POST['contrasena']);
                $rol = filtrado($_POST['rol']);

                $userDao = new UserDao();
                //$userDao->addUser($nombre,$email);
                //$arrayUser=$userDao->getAllUsers();

                //view::show('usersview', $arrayUser);

                $usuarioValido = $userDao->validarInicioSesion($nombre, $contraseña, $rol);

                if ($usuarioValido) {
                    // Iniciar sesión
                    session_start();
                    // Redirigir al usuario a la página principal
                    header("Location: index.php");
                    exit();
                } else {
                    // Mostrar mensaje de error
                    echo "Usuario o contraseña incorrectos";
                }
            } else {
                // si hay errores vuelve a la página del formulario.
                View::show('landing-page', $erroresForm);
            }
        }
    }


    
}
?>
