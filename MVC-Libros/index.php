<?php
// Activar reporte de errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de configuración
require_once 'config/config.php';

// Incluir el router
require_once 'router.php';

// Obtener la URL actual
$url = $_SERVER['REQUEST_URI'];

// Instanciar y usar el router para manejar la solicitud
$router = new Router($url);
$router->handle();
