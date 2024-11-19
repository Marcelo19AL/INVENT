<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Verificar si la aplicación está en modo de mantenimiento...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registrar el autoloader de Composer...
require __DIR__ . '/../vendor/autoload.php';

// Inicializar Laravel y manejar la solicitud...
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handle(
    Request::capture()
)->send();
