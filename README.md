Cybertel Job Search Interface
Bienvenido/a al proyecto de interfaz de búsqueda de empleo de Cybertel.

Descripción del Proyecto
Cybertel es una empresa dedicada a conectar personas que buscan trabajo con oportunidades en áreas específicas de su especialidad. Este proyecto consiste en una interfaz web que permite a los usuarios buscar y aplicar a trabajos disponibles en esas áreas. La plataforma se ha desarrollado utilizando PHP, Bootstrap 5, CSS y JavaScript para el frontend y backend, y phpMyAdmin para la gestión de la base de datos.

Tecnologías Utilizadas
PHP: Lógica backend y conexión con la base de datos.
Bootstrap 5: Diseño responsivo y componentes visuales modernos.
CSS: Personalización de estilos.
JavaScript: Interactividad en la interfaz.
phpMyAdmin/MySQL: Administración y gestión de la base de datos.
XAMPP: Entorno local para ejecutar Apache y MySQL.
Requisitos Previos
Instalar XAMPP
Descarga e instala XAMPP para tener acceso a Apache y MySQL/phpMyAdmin en tu máquina local.

Activar Servicios

Inicia el panel de control de XAMPP.
Activa los módulos de Apache y MySQL.
Configurar Base de Datos

Accede a phpMyAdmin.
Importa el archivo SQL de la base de datos (proporcionado en /trabajo/database/ o tu carpeta correspondiente).
Estructura del Proyecto
plaintext
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
Instalación y Puesta en Marcha
Clona o descarga el repositorio:

bash
git clone https://github.com/cvas16/RegistroCV.git
Copia la carpeta trabajo/ en el directorio htdocs de XAMPP:

plaintext
C:/xampp/htdocs/trabajo/
Importa la base de datos en phpMyAdmin:

Ingresa a http://localhost/phpmyadmin/.
Crea una nueva base de datos (ej. cybertel_db).
Usa la opción "Importar" para cargar el archivo SQL.
Configura la conexión a la base de datos en los archivos PHP necesarios (generalmente en /trabajo/includes/db.php o similar).

Inicia la aplicación:

En tu navegador, navega a:
http://localhost/trabajo/index.php
Uso de la Interfaz
Registro: Los nuevos usuarios pueden registrarse con sus datos personales y profesionales.
Inicio de sesión: Los usuarios registrados pueden ingresar a la plataforma.
Búsqueda de empleos: Explora las vacantes disponibles según áreas de especialidad.
Aplicar a empleos: Envía tu postulación a las ofertas de interés.
Panel de usuario: Visualiza tus postulaciones y actualiza tu información.
Créditos y Licencia
Este proyecto está licenciado bajo la Licencia MIT: https://opensource.org/licenses/MIT.
