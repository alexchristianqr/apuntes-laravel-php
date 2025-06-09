<?php

// Endpoint para obtener la versión de la API
$router->get('/phpinfo', function () {
    phpinfo();
});

// Endpoint para obtener la configuración de la aplicación
$router->get('/env', function () {
    return response()->json($_ENV);
});

// Endpoint para verificar la conexión a la base de datos
$router->get('/db-check', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['status' => 'OK']);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'ERROR',
            'message' => $e->getMessage()
        ], 500);
    }
});
