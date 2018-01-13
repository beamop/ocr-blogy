<?php

namespace siav\Lib;

class AutoLoad 
{
	public static function autoload($classname)
	{
		$classname = str_replace('siav', '', $classname);
		$classname = str_replace('\\', DS, $classname);
		$classname = strtolower($classname);
		$classname = $classname . '.php';

		if (file_exists(APP_PATH . $classname)) 
		{
			require_once APP_PATH . $classname;
		}
	}
}

spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');

?>