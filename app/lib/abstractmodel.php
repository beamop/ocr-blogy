<?php

namespace siav\Lib;

class AbstractModel
{
	public static $db; 

	private function BuildSQLstring()
	{
		$params = '';
	 	foreach ($this->tableSchema as $columnName) {
	 		if ($this->$columnName != null) {
		 		if (is_int($this->$columnName)) {
		 			$params .= $columnName . ' = ' . $this->$columnName . ', ';
		 		} else {
		 			$params .= $columnName . " = '" . $this->$columnName . "', ";
		 		}
	 		}
	 	}
	 	return trim($params, ', ');
	}

	public function Create()
	{
		$sql = 'INSERT INTO ' . static::$tableName . ' SET ' . self::BuildSQLstring();
		if (self::$db->query($sql)) {
			$this->id = self::$db->insert_id;
			return true;
		}
	}

	public static function Delete($pk)
	{
		$sql = 'DELETE FROM ' . static::$tableName . ' WHERE ' . $pk;
		if (self::$db->query($sql)) {
			return true;
		}
	}

	public function Update($pk)
	{
		$sql = 'UPDATE ' . static::$tableName . ' SET ' . self::BuildSQLstring() . ' WHERE '.$pk;
		if (self::$db->query($sql)) {
			return true;
		}
	}	
}

?>
