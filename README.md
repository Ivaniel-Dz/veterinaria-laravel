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

7. Instalación de inertia
```bash
npm install @inertiajs/inertia @inertiajs/inertia-vue3
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
php artisan make:factory MensajeFactory
```

- No usamos seeders especifico para este proyecto
- La cantidad de datos a generar se hará en ``seeders/DatabaseSeeder.php``

```bash
php artisan migrate:fresh --seed
```

## Modelo, Vista, controlador de Formulario de Mensajes

### 1. Modelo `Mensaje`

El modelo `Mensaje` representa un mensaje en la aplicación. Está ubicado en `app/Models/Mensaje.php`.

##### Atributos:

- `$nombre`: Nombre del remitente del mensaje.
- `$email`: Dirección de correo electrónico del remitente del mensaje.
- `$descripcion`: Contenido del mensaje.

##### Métodos:

- `protected $fillable`: Especifica los atributos que pueden ser asignados en masa al crear o actualizar una instancia de `Mensaje`.

---

### 2. Controlador `MensajeController`

El controlador `MensajeController` maneja las acciones relacionadas con los mensajes en la aplicación. Se encuentra en `app/Http/Controllers/MensajeController.php`.

##### Métodos:

- `index()`: Este método maneja la lógica para mostrar una lista paginada de mensajes. Utiliza el modelo `Mensaje` para obtener los mensajes de la base de datos y luego renderiza una vista usando Inertia.

---

### 3. Rutas

Las rutas asociadas con el controlador `MensajeController` están definidas en el archivo de rutas `routes/web.php`.

- **GET /mensajes**: Ruta para mostrar una lista paginada de mensajes. Esta ruta utiliza el método `index()` del controlador `MensajeController`.

---

### 4. Vistas

La vista `'Mensajes/Index'` es utilizada para mostrar la lista paginada de mensajes. Esta vista se renderiza utilizando Inertia y se espera que reciba un conjunto de mensajes como datos.

---

Esta documentación proporciona una descripción general de los componentes principales relacionados con el manejo de mensajes en la aplicación. Los modelos, controladores, rutas y vistas trabajan en conjunto para permitir a los usuarios ver y gestionar mensajes de manera efectiva.

## Mejoras del sistema
- Que muestre en el formulario de citas que hora y dia están disponibles
- Asignar veterinario automáticamente de acuerdo su disponibilidad
- Asignar roles

# Ejecución del Proyecto en Local
1. Instala las dependencias de Laravel utilizando Composer:
```bash
composer install
```

2. Copia el archivo de entorno de ejemplo (.env.example) para crear tu archivo .env:
```bash
cp .env.example .env
```

3. Configuración el archivo `.env`, verifica el nombre del proyecto y conexión de la BBDD del proyecto
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=veterinaria
DB_USERNAME=root
DB_PASSWORD=ivaniel
```

4. Genera la clave de aplicación de Laravel:
```bash
php artisan key:generate
```

5. Ejecuta las migraciones para crear las tablas en la base de datos:
```bash
php artisan migrate
```

6. (Opcional) Sembrar la base de datos con datos de prueba:
```bash
php artisan db:seed
```

7. Instala las dependencias de Vue
```bash
npm install
```

```bash
npm install axios
```

8. Ejecuta el servidor de vite
```bash
npm run dev
```

9. Ejecuta el servidor de composer
```bash
php artisan serve
```

# Preview de la web
### Landing Page
![preview](/public/img/preview/preview1.jpeg)
### Landing Page (Modo Oscuro)
![preview](/public/img/preview/preview2.jpeg)
### Login
![preview](/public/img/preview/preview3.jpeg)
### Registro
![preview](/public/img/preview/preview4.jpeg)
### Recuperación de contraseña
![preview](/public/img/preview/preview5.jpeg)
### Dashboard
![preview](/public/img/preview/preview6.jpeg)
