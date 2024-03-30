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

4. Ejecutamos la migracion de la base de datos despues de haber configurado el archivo .env
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

## 