<?php

namespace siav\Lib;

class AbstractController
{
	protected $_controller;
	protected $_action;
	protected $_params;
	protected $_view;
	protected $_data = [];

	public function __construct()
	{

	}

	public function NotFoundAction()
	{		
		$this->SetView();
		$this->Render($this->_view);
	}

	public function SetController($controllerName)
	{
		$this->_controller = $controllerName;
	}

	public function SetAction($actionName)
	{
		$this->_action = $actionName;
	}

	public function SetParams($params)
	{
		$this->_params = $params;
	}

	protected function SetView()
	{
		if ($this->_action == FrontController::NOT_FOUND_ACTION) {
			$this->_view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
		} else {			
			$this->_view = VIEWS_PATH . $this->_controller . DS . strtolower($this->_action) . '.view.php';			
		}
	}

	public function Render($view)
	{
		extract($this->_data);
		
		require_once TEMPLATE_PATH . 'head.php';
		require_once TEMPLATE_PATH . 'menu.php';
		require_once TEMPLATE_PATH . 'header-home.php';
		require_once $view;
		require_once TEMPLATE_PATH . 'footer.php';
	}

	public function RenderAbout($view)
	{
		extract($this->_data);
		
		require_once TEMPLATE_PATH . 'head.php';
		require_once TEMPLATE_PATH . 'menu.php';
		require_once TEMPLATE_PATH . 'header-about.php';
		require_once $view;
		require_once TEMPLATE_PATH . 'footer.php';
	}

	public function RenderPosts($view)
	{
		extract($this->_data);
		
		require_once TEMPLATE_PATH . 'head.php';
		require_once TEMPLATE_PATH . 'menu.php';
		require_once TEMPLATE_PATH . 'header-posts.php';
		require_once $view;
		require_once TEMPLATE_PATH . 'footer.php';
	}

	public function RenderPost($view)
	{
		extract($this->_data);
		
		require_once TEMPLATE_PATH . 'head.php';
		require_once TEMPLATE_PATH . 'menu.php';
		require_once $view;
		require_once TEMPLATE_PATH . 'footer.php';
	}

	public function RenderContact($view)
	{
		extract($this->_data);
		
		require_once TEMPLATE_PATH . 'head.php';
		require_once TEMPLATE_PATH . 'menu.php';
		require_once TEMPLATE_PATH . 'header-contact.php';
		require_once $view;
		require_once TEMPLATE_PATH . 'footer.php';
	}

	public function RenderAdmin($view)
	{
		extract($this->_data);
		
		require_once TEMPLATE_PATH . 'admin-head.php';
		require_once TEMPLATE_PATH . 'admin-menu.php';
		require_once $view;
		require_once TEMPLATE_PATH . 'admin-footer.php';
	}

	public function RenderOnlyView($view)
	{
		extract($this->_data);
		
		require_once $view;
	}

	public function limitEcho($x, $length) 
	{
	  if(strlen($x) <= $length) {
	    echo(strip_tags($x));
	  } else {
	    $y = substr($x, 0, $length) . '...';
	    echo(strip_tags($y));
	  }
	}

	public function mySQLDateRewriting($mysql_date) {
	  list($year, $month, $day) = explode('-', $mysql_date);
	  $time_stamp = mktime(0, 0, 0, $month, $day, $year);
	  $date_format = date("d M Y", $time_stamp);
	  return $date_format;
	}

}

?>