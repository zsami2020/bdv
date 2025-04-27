<?php
// api/api.php - Versión corregida
$request_uri = $_SERVER['REQUEST_URI'];

// Si es una ruta de API, procesa la solicitud
if (str_starts_with($request_uri, '/api/')) {
    require __DIR__ . '/../index.php';
} else {
    // Para todas las demás rutas, devuelve 404
    header("HTTP/1.0 404 Not Found");
    exit;
}
?>
