<?php

namespace siav\Lib;

class FrontController 
{
	private $_controller = 'index';
	private $_action = 'Default';
	private $_params = array();

	const NOT_FOUND_CONTROLLER = 'siav\Controllers\NotFoundController';
	const NOT_FOUND_ACTION =     'NotFoundAction';

	public function __construct() 
	{
		$this->ParseUrl();
		$this->Dispatch();
	}

	private function ParseUrl() 
	{
		$url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), 3);

		if (isset($url[0]) AND $url[0] != '') {

			$this->_controller = $url[0];
		}
		if (isset($url[1]) AND $url[1] != '') {

			$this->_action = $url[1];
		}
		if (isset($url[2]) AND $url[2] != '') {

			$this->_params = explode('/', $url[2]);
		}
	}

	private function Dispatch() 
	{
		if ($this->_controller == 'admin') {
			if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
				$this->_controller = 'login';
				$this->_action = 'Default';
			}
		}

		$controllerClassName = 'siav\Controllers\\' . ucfirst($this->_controller) . 'Controller';
		$actionName = ucfirst($this->_action) . 'Action';

		if (!class_exists($controllerClassName)) {
			$controllerClassName = self::NOT_FOUND_CONTROLLER;
		} 

		$controller = new $controllerClassName();

		if (!method_exists($controller, $actionName)) {
			$this->_action = $actionName = self::NOT_FOUND_ACTION;
		}

		$controller->SetController($this->_controller);
		$controller->SetAction($this->_action);
		$controller->SetParams($this->_params);

		$controller->$actionName();
	}
}

?>