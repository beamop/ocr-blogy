<?php

namespace siav\Models;
use siav\Lib\AbstractModel;

class MembresModel extends AbstractModel
{
	public $ID;
	public $email;
	public $pass;

	protected static $tableName = 'membres';

	protected $tableSchema = array(
		'email',
		'pass'
		);

	public function authenticate($email)
	{
		$sql = "SELECT ID, email, pass FROM membres WHERE email = '$email'";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        return $result;
	}

	public static function nUsers()
	{
		$sql = "SELECT COUNT(*) FROM membres";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->rowCount();
        return $result;
	}

}