# Act11 - Reze Purple Bloom

Proyecto de Laravel 9 para la Actividad 11. Se agregaron cuatro vistas Blade con un layout compartido, navegación superior con estado activo, footer global y recursos de imagen locales.

## Vistas y rutas

- `/` — Home (`pages.home`)
- `/gallery` — Gallery (`pages.gallery`)
- `/about` — About me (`pages.about`)
- `/contact` — Contact (`pages.contact`)

Las rutas originales `/child` y `/greeting` se conservaron como apoyo de la actividad.

## Ejecutar el proyecto

Desde la carpeta `act11`:

```bash
composer install
copy .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```

En Windows PowerShell también puedes usar `Copy-Item .env.example .env` en lugar de `copy`.

Abre la dirección que indique Artisan, normalmente `http://127.0.0.1:8000`.

> Si ya tienes `.env` configurado en tu equipo, consérvalo. No lo subas a GitHub. Las carpetas `vendor` y `node_modules` se generan localmente y no es necesario incluirlas en el repositorio.

## Imágenes

Los archivos de Reze utilizados por la galería están en `public/images/`. Son recursos locales, por lo que no se necesita conexión a internet para cargarlos.
