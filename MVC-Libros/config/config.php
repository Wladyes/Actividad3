<?php
// Configuración de acceso a la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'biblioteca');
define('DB_USER', 'root');
define('DB_PASSWORD', '');  // XAMPP usa por defecto sin contraseña para 'root'

// URL base del proyecto, útil para crear enlaces relativos
define('BASE_URL', 'http://localhost/MVC-Libros');

// Configuraciones adicionales, como el modo de depuración
define('DEBUG_MODE', true);

// Función para conectar a la base de datos utilizando PDO
function getDB() {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
    try {
        $db = new PDO($dsn, DB_USER, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        if (DEBUG_MODE) {
            die('Error de conexión a la base de datos: ' . $e->getMessage());
        } else {
            die('Error de conexión al sistema.');
        }
    }
}
