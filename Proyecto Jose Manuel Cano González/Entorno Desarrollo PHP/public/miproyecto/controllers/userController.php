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

        $arrayUsuarios = $userDao->getAllUsers();
        
        View::show('index', $arrayUsuarios);
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

            if (count($erroresForm) == 0) {
                $email = filtrado($_POST['nombre']);
                $contrasena = filtrado($_POST['contrasena']);

                $userDao = new UserDAO();
                $usuarioValido = $userDao->validarInicioSesion($email, $contrasena);

                if ($usuarioValido) {
                    // Iniciar sesión
                    session_start();
                    // Redirigir al usuario a la página principal
                    header("Location: views/landig-page.php");
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
