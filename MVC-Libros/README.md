## Configuración de la Base de Datos

1. **Abra phpMyAdmin** en su navegador.
2. **Cree una nueva base de datos** llamada `biblioteca`.
3. **Importe el archivo SQL** `sql/create_database.sql` en la base de datos `biblioteca`.
4. **Verifique que las tablas** `autores` y `libros` hayan sido creadas correctamente.

Este archivo SQL creará la base de datos y las tablas necesarias para que la aplicación funcione correctamente.



Diagrama de Estructura
MVC-Libros/
│
├── index.php                # Punto de entrada único
├── router.php               # Router para manejar las rutas y redirigir a los controladores
├── .htaccess                # Configuraciones de URL amigables
│
├── /config                  # Configuraciones generales
│   └── config.php           # Configuración de la base de datos y constantes
│
├── /controllers             # Controladores para manejar la lógica de negocio
│   ├── HomeController.php   # Controlador principal para la página de inicio
│   ├── LibrosController.php # Controlador para la gestión de libros
│   └── AutoresController.php# Controlador para la gestión de autores
│
├── /models                  # Modelos que interactúan con la base de datos
│   ├── Libro.php            # Modelo para la entidad Libro
│   └── Autor.php            # Modelo para la entidad Autor
│
├── /views                   # Vistas que presentan la información al usuario
│   ├── /home                # Vistas para la página de inicio
│   │   └── index.php        # Vista principal para la página de inicio
│   ├── /libros              # Vistas para la gestión de libros
│   │   ├── index.php        # Vista principal para la lista de libros
│   │   └── formulario.php   # Formulario para crear/editar libros (modal)
│   ├── /autores             # Vistas para la gestión de autores
│   │   ├── index.php        # Vista principal para la lista de autores
│   │   └── formulario.php   # Formulario para crear/editar autores (modal)
│   └── /templates           # Plantillas comunes
│       ├── header.php       # Encabezado común
│       ├── footer.php       # Pie de página común
│       └── modal.php        # Modal genérico para formularios
│
├── /public                  # Archivos públicos como CSS, JS e imágenes
│   ├── /css
│   │   └── style.css        # Estilos personalizados y configuración de Bootstrap
│   ├── /js
│   │   ├── main.js          # JavaScript principal para manejar modales y peticiones
│   │   └── axios_config.js  # Configuración de Axios para peticiones AJAX
│   └── /images              # Imágenes y recursos estáticos
│
├── /utils                   # Funciones de utilidad y helpers
│   └── helpers.php          # Funciones comunes (e.g., formateo de fechas, redirecciones)
├── sql/
│   └── create_database.sql  # Archivo SQL para crear la base de datos y tablas


## Contacto

Wladymir Escobar,  
correo electrónico: [gwescobar@espe.edu.ec.com]
Celular - 095 870 4158 
ID: L00409170

Margarita Fajardo,  
correo electrónico: [mcfajardo1@espe.edu.ec.com]
Celular - 098 787 5532 
ID: L00415848

Alex Quishpe
Email espe:¨ [apquishpe@espe.edu.ec]
Celular: 0995373379
L00359324