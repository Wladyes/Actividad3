<?php

/**
 * Escapa el output para prevenir XSS
 * @param string $string La cadena a escapar
 * @return string La cadena escapada
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Redirecciona a una URL específica
 * @param string $url La URL a la que redireccionar
 */
function redirect($url) {
    header("Location: $url");
    exit;
}

/**
 * Formatea una fecha para mostrar
 * @param string $dateString La fecha en formato de cadena
 * @param string $format El formato deseado para la fecha
 * @return string La fecha formateada
 */
function formatDate($dateString, $format = "d/m/Y") {
    $date = new DateTime($dateString);
    return $date->format($format);
}

/**
 * Genera un slug a partir de un string
 * @param string $text
 * @return string El slug generado
 */
function createSlug($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}

/**
 * Muestra un mensaje flash almacenado en la sesión
 * @param string $name El nombre del mensaje flash
 * @return string El mensaje flash
 */
function flashMessage($name) {
    if (isset($_SESSION[$name])) {
        $message = $_SESSION[$name];
        unset($_SESSION[$name]);
        return $message;
    }
    return null;
}
