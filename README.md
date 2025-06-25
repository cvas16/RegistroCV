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
│   ├── config/             
│   │   ├── app.php/
│   │   ├── database.php/
|   |
│   │── controller/
|   |   |── AuthController.php
|   |   |── PaginaController.php
|   |   |── PostulacionController.php
|   |   |── RRHHController.php
|   |   └── UsuarioController.php
|   |
|   ├── css/
│   │   |── homepage.css
|   |   |── nosotros.css
|   |   └── style.css
|   |
|   ├── database/
|   |   └──cybertel.sql
|   |
|   ├── dto/
│   |   ├── PostulacionDTO.php
│   |   └── UsuarioDTO.php
│   | 
│   ├── img/
│   │   └── (tus imágenes)
|   |
|   ├── includes/
│   |   ├── footer.php
│   |   └── header.php
│   |  
|   ├── model/
│   |   ├── Postulacion.php
│   |   └── Usuario.php
│   |
|   ├── public/
│   |   ├── contactos.php
│   |   ├── login.php
│   |   ├── nosotros.php
│   |   ├── panel_rrhh.php
│   |   ├── perfil.php
│   |   ├── registro.php
│   |   ├── registro_cv.php
|   |
|   ├── repository/
|   │   ├── PostulacionRepository.php
|   │   └── UsuarioRepository.php
│   |
|   ├── security/
|   │   └── Security.php
│   |
|   ├── service/
|   │   ├── PostulacionService.php
|   │   └── UsuarioService.php
│   |
|   └── uploads/
│       └── (CVs y archivos subidos)
|   └──index.php
├── README.md
└── 
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

## Créditos y Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

Desarrollado por el equipo de Cybertel.
