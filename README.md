# Cybertel Job Search Interface

Bienvenido/a al proyecto de interfaz de búsqueda de empleo de **Cybertel**.

---

## Descripción del Proyecto

Cybertel es una empresa dedicada a conectar personas que buscan trabajo con oportunidades en áreas específicas de su especialidad.  
Este proyecto consiste en una interfaz web que permite a los usuarios buscar y aplicar a trabajos disponibles en esas áreas.  
La plataforma se ha desarrollado utilizando PHP, Bootstrap 5, CSS y JavaScript para el frontend y backend, y phpMyAdmin para la gestión de la base de datos.

---

## Tecnologías Utilizadas

- **PHP:** Lógica backend y conexión con la base de datos.
- **Bootstrap 5:** Diseño responsivo y componentes visuales modernos.
- **CSS:** Personalización de estilos.
- **JavaScript:** Interactividad en la interfaz.
- **phpMyAdmin/MySQL:** Administración y gestión de la base de datos.
- **XAMPP:** Entorno local para ejecutar Apache y MySQL.

---

## Requisitos Previos

1. **Instalar XAMPP**  
   Descarga e instala [XAMPP](https://www.apachefriends.org/index.html) para tener acceso a Apache y MySQL/phpMyAdmin en tu máquina local.

2. **Activar Servicios**  
   - Inicia el panel de control de XAMPP.
   - Activa los módulos de **Apache** y **MySQL**.

3. **Configurar Base de Datos**  
   - Accede a [phpMyAdmin](http://localhost/phpmyadmin/).
   - Importa el archivo SQL de la base de datos (proporcionado en `/trabajo/database/` o tu carpeta correspondiente).

---

## Estructura del Proyecto

```plaintext
RegistroCV/
│
├── trabajo/                # Carpeta principal de la aplicación
│   ├── assets/             # Archivos estáticos (CSS, JS, imágenes)
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   ├── database/           # Archivos de la base de datos (ej. .sql)
│   ├── includes/           # Archivos PHP reutilizables (conexión, header, footer)
│   ├── templates/          # Plantillas de Bootstrap y PHP
│   ├── index.php           # Página principal de la interfaz
│   ├── login.php           # Página de inicio de sesión
│   ├── register.php        # Página de registro de usuarios
│   ├── dashboard.php       # Panel principal tras iniciar sesión
│   ├── jobs.php            # Listado de ofertas de trabajo
│   ├── apply.php           # Aplicar a un trabajo
│   └── ...                 # Otros archivos y módulos
├── README.md
└── ...
```

---

## Instalación y Puesta en Marcha

1. **Clona o descarga el repositorio:**
   ```bash
   git clone https://github.com/cvas16/RegistroCV.git
   ```

2. **Copia la carpeta `trabajo/` en el directorio `htdocs` de XAMPP:**
   ```plaintext
   C:/xampp/htdocs/trabajo/
   ```

3. **Importa la base de datos en phpMyAdmin:**
   - Ingresa a [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
   - Crea una nueva base de datos (ej. `cybertel_db`).
   - Usa la opción "Importar" para cargar el archivo SQL.

4. **Configura la conexión a la base de datos en los archivos PHP necesarios**  
   (generalmente en `/trabajo/includes/db.php` o similar).

5. **Inicia la aplicación:**
   - En tu navegador, navega a:  
     [http://localhost/trabajo/index.php](http://localhost/trabajo/index.php)

---

## Uso de la Interfaz

- **Registro:** Los nuevos usuarios pueden registrarse con sus datos personales y profesionales.
- **Inicio de sesión:** Los usuarios registrados pueden ingresar a la plataforma.
- **Búsqueda de empleos:** Explora las vacantes disponibles según áreas de especialidad.
- **Aplicar a empleos:** Envía tu postulación a las ofertas de interés.
- **Panel de usuario:** Visualiza tus postulaciones y actualiza tu información.

---

## Autenticación con Google (Login con Google)

El proyecto permite a los usuarios iniciar sesión con su cuenta de Google utilizando OAuth 2.0.  
Sigue estos pasos para configurar y habilitar el login con Google en tu entorno local:

### 1. Instalar Composer

Composer es el gestor de dependencias de PHP. Si no lo tienes instalado, sigue este tutorial: [https://codigonaranja.com/tutorial-composer-php-dependencias](https://codigonaranja.com/tutorial-composer-php-dependencias)

Pasos resumen:
- Dirígete a la sección **Instalar composer** en el tutorial.
- Descarga el instalador y ejecútalo (`Composer-setup.exe`).
- Sigue el asistente hasta finalizar la instalación.

### 2. Instalar la librería de Google

En la carpeta raíz de tu proyecto, abre la terminal y ejecuta:

```bash
composer require google/apiclient-services
```
Esto instalará la carpeta `vendor/` y las dependencias necesarias para la autenticación con Google.

### 3. Crear credenciales en Google Cloud Console

1. Accede a [Google Cloud Console](https://console.cloud.google.com/).
2. Crea un nuevo proyecto.
3. Ve a **APIs y servicios > Credenciales**.
4. Haz clic en **Crear credenciales** y selecciona **ID de cliente OAuth 2.0**.
5. Completa los datos requeridos.
6. En **URI de redirección autorizados**, coloca la URL a la que Google debe redirigir después de la autenticación.  
   Ejemplo para entorno local:
   ```
   http://localhost/trabajo/public/google_callback.php
   ```
7. Guarda el **Client ID** y **Client Secret** generados; los necesitarás en tu código.

### 4. Configuración en el proyecto

- Las funcionalidades de login con Google están implementadas en los archivos:
  - `googlelogin.php`
  - `google_callback.php`
- Debes colocar el Client ID y Client Secret de Google en la configuración de estos archivos, siguiendo la documentación o los comentarios en el código.

> **Nota:**  
> Si cambias la ruta de los archivos de callback, actualiza también el URI de redirección en Google Cloud Console.

---

## Créditos y Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

Desarrollado por el equipo de Cybertel.
