<?php
/**
 * Constantes migradas de bee_config.php
 * a este archivo para cuando se deba realizar una actualización del sistema
 * o corrección       , las credenciales de la base de datos no queden expuestas ni
 * sean modificadas en el proceso por accidente así como el basepath y otras constantes que requieran
 * configuración especial en producción
 */
define('IS_LOCAL'     , in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));
define('BASEPATH'     , IS_LOCAL ? '/Bee-Framework/' : '____EL BASEPATH EN PRODUCCIÓN___'); // Debe ser cambiada a la ruta de tu proyecto en producción y desarrollo
define('IS_DEMO'      , false);

// Set para conexión en producción o servidor real
define('DB_ENGINE'    , 'mysql');
define('DB_HOST'      , 'localhost');
define('DB_NAME'      , '___REMOTE DB___');
define('DB_USER'      , '___REMOTE DB___');
define('DB_PASS'      , '___REMOTE DB___');
define('DB_CHARSET'   , '___REMOTE CHARTSET___');

/** Extra constants to be used */

// Para uso futuro de Gmaps o alguna implementación similar
define('GMAPS'        , '__TOKEN__');

// Nombres de cookies para autentificación de usuarios
// el valor puede ser cambiado en caso de utilizar
// multiples instancias de Bee para proyectos diferentes y los cookies no representen un problema por el nombre repetido
define('AUTH_TKN_NAME', 'bee__cookie_tkn');
define('AUTH_ID_NAME' , 'bee__cookie_id');

// Salt utilizada para agregar seguridad al hash de contraseñas o similar dependiendo el uso requerido
define('AUTH_SALT'    , 'BeeFramework<3');

// En caso de implementación de pagos en línea para definir si se está trabajando con pasarelas en modo sanbox / prueba o producción
define('SANDBOX'      , false); // live or sandbox


// Definir el uso horario o timezone del sistema
date_default_timezone_set('America/Mexico_City');

// Lenguaje
define('SITE_LANG'   , $this->lng);

// Charset
define('SITE_CHARSET', 'UTF-8');

// Prepros 2021
define('PREPROS'      , true); // Activar en caso de trabajar el desarrollo en prepros como servidor local
define('PORT'         , '8848'); // Puerto por defecto de Prepros < 2020

// Utilidades
define('CSS_FRAMEWORK', 'bs5'); // opciones disponibles: bs o bs5 = Bootstrap 5 | bl = Bulma | fn = Foundation
define('JQUERY'       , true);  // define si es requerido jquery para el sitio
define('VUEJS'        , true);  // define si es requerido Vue js 3 para el sitio | CDN
define('AXIOS'        , false);  // define si es requerido Axios para peticiones HTTP
define('TOASTR'       , true);  // define si es requerido Toastr para notificaciones con Javascript
define('WAITME'       , true);  // define si es requerido WaitMe
define('LIGHTBOX'     , false);  // define si es requerido Lightbox

// Versión de la aplicación
define('BEE_NAME'    , $this->framework); // Viene desde Bee.php
define('BEE_VERSION' , $this->version);   // Viene desde Bee.php
define('BEE_LOGO'    , 'bee_logo.png');   // Nombre del archivo del logotipo de Bee Framework

// Datos de la empresa / negocio / sistema
define('SITE_NAME'   , 'EmpresaCool');    // Nombre del sitio
define('SITE_VERSION', '1.0.0');          // Versión del sitio
define('SITE_LOGO'   , 'logo.png');       // Nombre del archivo del logotipo base
define('SITE_FAVICON', 'favicon.ico');    // Nombre del archivo del favicon base

// Configuración de correos electrónicos
define('PHPMAILER_EXCEPTIONS', true);                // Mantener activo para recibir excepciones en errores de Phpmailer
define('PHPMAILER_SMTP'      , false);               // Activar uso de cuenta SMTP para envío de correos true o false
define('PHPMAILER_DEBUG'     , false);               // Solo activar si es necesario el log verboso para debug
define('PHPMAILER_HOST'      , 'smtp.example.com');  // Dominio o servidor SMTP
define('PHPMAILER_AUTH'      , true);                // Autenticar con SMTP true o false
define('PHPMAILER_USERNAME'  , 'user@example.com');  // Usuario de la cuenta
define('PHPMAILER_PASSWORD'  , '123secret');         // Password de la cuenta
define('PHPMAILER_SECURITY'  , 'tls');               // Tipo de seguridad, opciones tls o ssl
define('PHPMAILER_PORT'      , '465');               // Puerto de conexión SMTP -- 587 hotmail -- 465 gmail
define('PHPMAILER_TEMPLATE'  , 'emailTemplate');     // Plantilla por defecto de correo electrónico

// Puerto y la URL del sitio
define('PROTOCOL'   , isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"); // Detectar si está en HTTPS o HTTP
define('HOST'       , $_SERVER['HTTP_HOST'] === 'localhost' ? (PREPROS ? 'localhost:'.PORT : 'localhost') : $_SERVER['HTTP_HOST']); // Dominio o host localhost.com tudominio.com
define('REQUEST_URI', $_SERVER["REQUEST_URI"]); // Parámetros y ruta requerida
define('URL'        , PROTOCOL.'://'.HOST.BASEPATH); // URL del sitio
define('CUR_PAGE'   , PROTOCOL.'://'.HOST.REQUEST_URI); // URL actual incluyendo parámetros get

// Las rutas de directorios y archivos
define('DS'         , DIRECTORY_SEPARATOR);
define('ROOT'       , getcwd().DS);

define('APP'        , ROOT.'app'.DS);
define('CLASSES'    , APP.'classes'.DS);
define('CONFIG'     , APP.'config'.DS);
define('CONTROLLERS', APP.'controllers'.DS);
define('HELPERS'  , APP.'helpers'.DS);
define('MODELS'     , APP.'models'.DS);
define('LOGS'       , APP.'logs'.DS);

define('RESOURCES'  , ROOT.'resources'.DS);
define('INCLUDES'   , RESOURCES.'includes'.DS);
define('COMPONENTS'    , RESOURCES.'components'.DS);
define('VIEWS'      , RESOURCES.'views'.DS);

// Rutas de recursos y assets absolutos
define('IMAGES_PATH', ROOT.'assets'.DS.'images'.DS);

// Rutas de archivos o assets con base URL
define('ASSETS'     , URL.'assets/');
define('CSS'        , ASSETS.'css/');
define('FAVICON'    , ASSETS.'favicon/');
define('FONTS'      , ASSETS.'fonts/');
define('IMAGES'     , ASSETS.'images/');
define('JS'         , ASSETS.'js/');
define('PLUGINS'    , ASSETS.'plugins/');
define('UPLOADS'    , ROOT.'assets'.DS.'uploads'.DS);
define('UPLOADED'   , ASSETS.'uploads/');

// Credenciales de la base de datos
// Set para conexión local o de desarrollo
define('LDB_ENGINE' , 'mysql');
define('LDB_HOST'   , 'localhost');
define('LDB_NAME'   , 'db_beeframework');
define('LDB_USER'   , 'root');
define('LDB_PASS'   , '');
define('LDB_CHARSET', 'utf8');

// El controlador por defecto / el método por defecto / el controlador de errores por defecto
define('DEFAULT_CONTROLLER'      , 'home');
define('DEFAULT_ERROR_CONTROLLER', 'error');
define('DEFAULT_METHOD'          , 'index');

// Se encuentra en archivo bee_config.php
// define('DB_ENGINE'  , 'mysql');
// define('DB_HOST'    , 'localhost');
// define('DB_NAME'    , '___REMOTE DB___');
// define('DB_USER'    , '___REMOTE DB___');
// define('DB_PASS'    , '___REMOTE DB___');
// define('DB_CHARSET' , '___REMOTE CHARTSET___');