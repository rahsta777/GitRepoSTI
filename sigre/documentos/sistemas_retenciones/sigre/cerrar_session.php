<?php
  session_start();
  unset($_SESSION["usuario_valido"]); 
  unset($_SESSION["nom_usuario"] );
  unset($_SESSION["usuario_valido"]); 
  unset($_SESSION["tipo_user"]);
  session_destroy();
  header("Location: acceso.php");
  exit;
?>
<?php/*
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión.
session_destroy();*/
?>

