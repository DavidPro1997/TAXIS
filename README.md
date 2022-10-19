<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# TAXIS
Proyecto creado con Laravel, para asignación de conductores a vehículos

### Para desplegar el proyecto de forma local

- Para la correcta instalación y ejecución del proyecto es necesario las siguientes herramientas: Composer, Laravel, MySQL, PHP.
- Clone el repositorio en una carpeta local.
> git clone https://github.com/DavidPro1997/TAXIS.git
- Cree una base de datos en MySQL llamada “dbTaxis”
- Actualice sus credenciales MySQL en el archivo .env.
- Agrege las migraciones de la base de datos y aliméntela con los seeders. 
> php artisan migrate --seed
- Corra el proyecto.
> php artisan serve
