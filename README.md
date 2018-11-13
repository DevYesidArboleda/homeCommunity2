# Instalación

Descarga WordPress.
Descomprime el .zip de WordPress en la carpeta pública de tu servidor (local o remoto).
Renombra la carpeta wordpress por un nombre relacionado con el proyecto a desarrollar.
Crea una base de datos en MySQL para el nuevo proyecto, lo puedes hacer desde la aplicación web phpMyAdmin que se incluye en la mayoría de ambientes de desarrollo para WordPress.
Busca el archivo wp-config-sample.php y renómbralo como wp-config.php.
Abre el archivo wp-config.php y editar los siguientes datos:

  define('DB_NAME', 'database_name_here');
  define('DB_USER', 'username_here');
  define('DB_PASSWORD', 'password_here');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

  define('AUTH_KEY',         'put your unique phrase here');
  define('SECURE_AUTH_KEY',  'put your unique phrase here');
  define('LOGGED_IN_KEY',    'put your unique phrase here');
  define('NONCE_KEY',        'put your unique phrase here');
  define('AUTH_SALT',        'put your unique phrase here');
  define('SECURE_AUTH_SALT', 'put your unique phrase here');
  define('LOGGED_IN_SALT',   'put your unique phrase here');
  define('NONCE_SALT',       'put your unique phrase here');

  $table_prefix  = 'wp_';
Ejecuta la carpeta del sitio en el navegador.
Llena la información que se te pide:
Título del sitio.
Nombre del usuario Administrador.
Contraseña del Administrador.
Correo electrónico del Administrador.
Elegir la Visibilidad para los buscadores.

¡Listo!

Una vez instalado:
Para ver WP como usuario administrador:
http:// ruta-del-sitio/wp-login.php o
http:// ruta-del-sitio/wp-admin
Para ver WP como usuario visitante:
http:// ruta-del-sitio

El contenido de este repositorio debe ser ubicado en la dirección "/wordpress/wp-content/themes/Nombre-del-tema"
