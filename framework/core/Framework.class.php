<?php
/**
 * Our frameworks core class
 */
class Framework {
	public static function run() {
		echo "Welcome to our framework! <br> It is running! :)";
		self::init();
		self::autoload();
		self::dispatch();
	}

	/**
	 * Initialization
	 */
	private static function init() {
//		Define path constants

		define("DS", DIRECTORY_SEPARATOR);
		define("ROOT", getcwd() . DS);

		define("APP_PATH", ROOT . 'application' . DS);
		define("FRAMEWORK_PATH", ROOT . 'framework' . DS);
		define("PUBLIC_PATH", ROOT . 'public' . DS);

		define("CONFIG_PATH", APP_PATH . 'config' . DS);
		define("CONTROLLER_PATH", APP_PATH . 'controllers' . DS);
		define("MODEL_PATH", APP_PATH . 'models' . DS);
		define("VIEW_PATH", APP_PATH . 'views' . DS);

		define("CORE_PATH", FRAMEWORK_PATH . 'core' . DS);
		define("DB_PATH", FRAMEWORK_PATH . 'database' . DS);
		define("HELPER_PATH", FRAMEWORK_PATH . 'helpers' . DS);
		define("LIB_PATH", FRAMEWORK_PATH . 'libraries' . DS);

		define("UPLOAD_PATH", PUBLIC_PATH . 'uploads' . DS);

//		Load core classes
		require CORE_PATH . "Controller.class.php";
		require CORE_PATH . "Loader.class.php";
		require DB_PATH . "Mysql.class.php";
		require CORE_PATH . "Model.class.php";

//		Load configuration file
		$GLOBALS['config'] = include CONFIG_PATH . "config.php";

//		Start session
		session_start();

	}
	
	private static function autoload() {

	}

	private static function dispatch() {

	}
}
