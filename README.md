# Veterinaria v2

## Tecnologías usadas
- Laravel 11
- Vue 3
- Inertia
- Mysql
- Tailwind

## Instalación
1. Creación del proyecto
```bash
composer create-project laravel/laravel:^11.0 veterinaria
```

2. Ingresar al proyecto
```bash
cd veterinaria
```

>Documentación: [Larastarters](https://github.com/LaravelDaily/Larastarters?tab=readme-ov-file)

3. Instalación del paquete Larastarters
```bash
composer require laraveldaily/larastarters --dev
```

4. Instalación de las dependencias
```bash
php artisan larastarters:install
```
Opciones 1 escogida:
1: Laravel Breeze  & Inertia (Tailwind)

Opciones 2 escogida:
2: tailwindcomponents

4. Ejecutamos la migración de la base de datos después de haber configurado el archivo .env
```bash
php artisan migrate
```

5. Ejecutamos los servidores
Laravel
```bash
php artisan serve
```

Vite
```bash
npm run dev
```

6. Instalación de Plugin para ordenar las clases de tailwind
```bash
npm install -D prettier prettier-plugin-tailwindcss
```

Crear el archivo `.prettierrc.js` en el proyecto y dentro solo agregar `{}`

## Crear las navegación en el dashboard
1. Crea el componente: Mensaje, Service, Dashboard.
2. En el componente Navigation que se encuentra en `js/Layouts/Navigation.vue`.
    - Se agrega el link de los componente a traves del parámetro router().
3. en el archivo web.php donde están declaradas los routers se agrega los routers de los componentes creadas.

## Creación de las migraciones

```bash
php artisan make:migration create_mensajes_table --create=mensajes
```

```bash
php artisan make:migration create_propietarios_table --create=propietarios
```

```bash
php artisan make:migration create_mascotas_table --create=mascotas
```

```bash
php artisan make:migration create_servicios_table --create=servicios
```

```bash
php artisan make:migration create_citas_table --create=citas
```

## Crear Model
```bash
php artisan make:model Name
```

## Crear Controller
```bash
php artisan make:controller PhotoController --resource
```

## Crear Factory: datos de pruebas
```bash
php artisan make:seeder MensajeSeeder
```
```bash
php artisan make:factory MensajeFactory
```
```bash
php artisan migrate:fresh --seed
```

## Mejoras del sisteme
- Que muestre en el formulario de citas que hora y dia están disponibles
- asignar veterinario a las automáticamente de acuerdo su disponibilidad
- Asignar roles