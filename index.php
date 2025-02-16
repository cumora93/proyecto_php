<?php
require_once 'config/config.php';
require_once 'app/controllers/EquipoController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'equipo';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
if (file_exists("app/controllers/$controllerName.php")) {
    $controllerInstance = new $controllerName();
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo "Acción no encontrada";
    }
} else {
    echo "Controlador no encontrado";
}
?>