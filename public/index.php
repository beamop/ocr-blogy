<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

if (file_exists('..' . DS . 'app' . DS . 'config.php')) 
{
 	require_once '..' . DS . 'app' . DS . 'config.php';
}