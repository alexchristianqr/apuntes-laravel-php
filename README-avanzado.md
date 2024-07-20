# apuntes-laravel-php

Todo sobre los comandos en Laravel PHP: BASICO, INTERMEDIO y AVANZADO

# BASICO

[Comandos Laravel PHP Básico](https://github.com/alexchristianqr/apuntes-laravel-php/blob/main/README.md)

# INTERMEDIO

[Comandos Laravel PHP Intermedio](https://github.com/alexchristianqr/apuntes-laravel-php/blob/main/README-intermedio.md)

# AVANZADO

```bash
php artisan test # Ejecuta las pruebas unitarias y funcionales de Laravel.
php artisan optimize # Ejecuta optimizaciones de rendimiento, incluida la generación del archivo de clases cargadas.
php artisan down # Coloca la aplicación en modo mantenimiento.
php artisan up # Quita la aplicación del modo mantenimiento.
php artisan cache:table # Crea una tabla de caché para almacenar datos en la base de datos.
php artisan view:cache # Compila todas las vistas y crea un archivo de caché para mejorar el rendimiento.
php artisan schedule:list # Muestra una lista de todas las tareas programadas y su próximo tiempo de ejecución.
php artisan storage:link # Crea un enlace simbólico del directorio de almacenamiento.
php artisan migrate:status # Verifica el estado de las migraciones (si están aplicadas o no).
php artisan make:rule NombreDeLaRegla # Crea una nueva regla de validación personalizada.
php artisan make:command NombreDeLaTarea # Crea una nueva tarea programada.
```

```bash
php artisan make:factory NombreDelFactory # Crea una nueva fábrica de modelos para pruebas.
php artisan make:policy NombreDeLaPolítica --model=NombreDelModelo # Crea una política asociada a un modelo específico.
php artisan make:resource NombreDelResource # Crea un recurso de API para transformar los modelos en respuestas JSON.
php artisan make:channel NombreDelChannel # Crea un canal de broadcast para transmitir eventos en tiempo real.
php artisan make:observer NombreDelObserver --model=NombreDelModelo # Crea un observador para eventos del ciclo de vida de un modelo.
php artisan make:notification NombreDeLaNotificación # Crea una nueva notificación.
php artisan make:listener NombreDelListener --event=NombreDelEvento # Crea un listener para un evento de broadcast específico.
```

```bash
# Inspeccionar el servicio de colas:
php artisan queue:failed # Muestra una lista de todos los trabajos de la cola que han fallado.
php artisan queue:retry {id} # Reintenta un trabajo de la cola fallido específico por su ID.
php artisan queue:flush # Elimina todos los trabajos de la cola que han fallado.
```

```bash
# Ejecutar tareas programadas manualmente:
php artisan schedule:run # Ejecuta las tareas programadas que deberían correr en ese momento.
```

```bash
# Realizar rollback de migraciones específicas:
php artisan migrate:rollback --step={n} # Revierta las últimas 'n' migraciones ejecutadas.
```

```bash
# Borrar el caché de rutas:
php artisan route:cache # Crea un archivo de caché para acelerar la carga de rutas.
```

```bash
# Generar un archivo de caché de configuración:
php artisan config:cache # Combina todos los archivos de configuración en uno solo para mejorar el rendimiento.
php artisan config:clear # Elimina el archivo de caché de configuración.
```

```bash
# Borrar el caché de eventos:
php artisan event:clear # Elimina el archivo de caché de eventos.
```

```bash
# Generar archivos de traducción JSON:
php artisan lang:publish # Publica los archivos de traducción en formato JSON.
```

```bash
# Optimizar el rendimiento del autoload de Composer para producción:
composer install --optimize-autoloader --no-dev # Instala los paquetes de Composer con optimizaciones y sin las dependencias de desarrollo.
```

```bash
# Generar un informe de estado del sistema:
php artisan config:clear && php artisan cache:clear && php artisan route:clear && php artisan view:clear && composer dump-autoload # Limpia todas las cachés y optimiza el autoload de Composer.
```
