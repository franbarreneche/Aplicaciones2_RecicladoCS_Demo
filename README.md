# RECICLADO CS

## Acerca

El sistema consiste en una pequeña parte de una web app para el manejo de centros de reciclado en la ciudad de Coronel Suárez.

- Login y Logout de Usuario.
- Manejo de errores en esas funciones.

## Instrucciones

1. Clonar el Proyecto
2. Instalar y/o actualizar Composer y PHP.
3. Dentro de la carpeta del proyecto ejecutar el comando `composer install`
4. Renombrar el archivo ".env.example" a sólo ".env" y modificar la configuración del mismo de acuerdo al entorno que esté usando (principalmente lo relacionado con la Base de Datos).
5. Ir a la carpeta `vendor/laravel/framework/src/illuminate/Auth/GenericUser.php` y modificar los métodos `getRememberToken()` y `getRememberTokenName()` para que devuelvan `null`. 
6. Dentro del a carpeta del proyecto ejecutar el comando: `php artisan migrate --seed`
7. Finalmente, arrancar el server con el comando: `php artisan serve`
