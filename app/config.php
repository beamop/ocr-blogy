<?php

use siav\Lib\Database;
use siav\Lib\FrontController;
use siav\Lib\AbstractModel;
use siav\Models\OptionsModel;

ob_start();

/**
 * Database setup
 * Configuration de la base de données
 */

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'blogy-mvc');
define('DB_USER', 'user');
define('DB_PASSWORD', 'pass');

/**
 * DTTC!
 * (Don't Touch That Code!)
 * (Ne touchez pas à ce code!)
 */

ini_set('display_errors', 1);

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('APP_PATH') ? null : define('APP_PATH', realpath(dirname(__file__)) .DS);
defined('HOST_NAME') ? null : define('HOST_NAME', '//' . $_SERVER['HTTP_HOST'] . '/');

define('LIB_PATH', APP_PATH . 'lib' .DS);
define('MODELS_PATH', APP_PATH . 'models' .DS);
define('VIEWS_PATH', APP_PATH . 'views' .DS);
define('CONTROLLERS_PATH', APP_PATH . 'controllers' .DS);
define('TEMPLATE_PATH', VIEWS_PATH . '_template' .DS);

defined('CSS_DIR') ? null : define('CSS_DIR', HOST_NAME . 'css/');
defined('VENDOR_DIR') ? null : define('VENDOR_DIR', HOST_NAME . 'vendor/');
defined('JS_DIR') ? null : define('JS_DIR', HOST_NAME . 'js/');
define('IMAGES_DIR', HOST_NAME . 'img/');

if (file_exists(APP_PATH . DS . 'lib' . DS . 'autoload.php')) {
	require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';
}

session_start();

$db = Database::getconnection();

AbstractModel::$db = $db;

define('TITLE', htmlspecialchars(OptionsModel::getTitle()));

$FrontController = new FrontController;

ob_flush();
