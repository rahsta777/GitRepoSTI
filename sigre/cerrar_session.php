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
// Inicializar la sesi�n.
// Si est� usando session_name("algo"), �no lo olvide ahora!
session_start();

// Destruir todas las variables de sesi�n.
$_SESSION = array();

// Si se desea destruir la sesi�n completamente, borre tambi�n la cookie de sesi�n.
// Nota: �Esto destruir� la sesi�n, y no la informaci�n de la sesi�n!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesi�n.
session_destroy();*/
?>

