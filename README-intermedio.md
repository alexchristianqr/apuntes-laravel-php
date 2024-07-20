# apuntes-laravel-php

Todo sobre los comandos en Laravel PHP: BASICO, INTERMEDIO y AVANZADO

# BASICO

[Comandos Laravel PHP Básico](https://github.com/alexchristianqr/apuntes-laravel-php/blob/main/README.md)

# INTERMEDIO

```bash
php artisan make:controller NombreDelControlador --resource  # Crea un controlador con métodos RESTful predeterminados.
php artisan make:seeder NombreDelSeeder  # Crea un archivo seeder para poblar la base de datos con datos de prueba.
php artisan make:job NombreDelJob  # Crea un nuevo Job que puede ser encolado para ejecución en segundo plano.
php artisan make:event NombreDelEvent  # Crea un nuevo Event para el sistema de eventos de Laravel.
php artisan make:listener NombreDelListener  # Crea un Listener para manejar un evento específico.
php artisan make:policy NombreDeLaPolítica  # Crea una política para manejar la autorización de los usuarios.
```

```bash
php artisan db:seed  # Ejecuta todos los seeders registrados en DatabaseSeeder.
php artisan migrate:refresh --seed  # Revierte y vuelve a ejecutar todas las migraciones, luego ejecuta los seeders.
php artisan migrate:status  # Muestra el estado de cada migración (si ha sido ejecutada o no).
```

```bash
php artisan vendor:publish  # Publica los archivos de configuración y otros recursos de paquetes externos.
composer dump-autoload  # Regenera el archivo autoload de Composer, mejorando el rendimiento.
```

```bash
php artisan cache:clear  # Elimina la caché de la aplicación.
php artisan view:clear  # Elimina los archivos de caché de las vistas compiladas.
php artisan make:model NombreDelModelo -a  # Crea un modelo junto con un controlador, una migración, un factory y un seeder.
```

```bash
php artisan queue:work  # Procesa trabajos en la cola hasta que se detenga manualmente.
php artisan queue:restart  # Reinicia todos los workers de la cola.
```

```bash
php artisan route:list  # Muestra todas las rutas registradas en la aplicación.
```

# AVANZADO

[Comandos Laravel PHP Avanzado](https://github.com/alexchristianqr/apuntes-laravel-php/blob/main/README-avanzado.md)

