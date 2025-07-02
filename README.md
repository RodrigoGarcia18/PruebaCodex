# PruebaCodex

Aplicación web para gestión de citas de vacunación desarrollada con [Laravel](https://laravel.com/).

## Requisitos
- PHP 8.2+
- Composer

## Instalación
1. Instalar dependencias de PHP:
   ```bash
   composer install
   ```
2. Copiar el archivo `.env.example` dentro de `laravel-app` a `.env` y generar la clave:
   ```bash
   cd laravel-app
   cp .env.example .env
   php artisan key:generate
   ```
3. Crear la base de datos SQLite por defecto:
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

## Uso
Lanzar el servidor integrado:
```bash
php artisan serve
```
La aplicación estará disponible en `http://localhost:8000`.

## Características
- Dashboard con gráficas estadísticas usando Chart.js
- Gestión de citas de vacunación
- Distintos roles de usuario (admin/paciente) protegidos por middleware

## Pruebas
Se incluyen pruebas de Laravel ejecutables con:
```bash
php artisan test
```
