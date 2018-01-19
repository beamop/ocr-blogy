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
		$sql = self::$db->prepare('INSERT INTO ' . static::$tableName . ' SET ' . self::BuildSQLstring());

		$sql->execute();

        $this->id = self::$db->insert_id;

        return true;
	}

	public static function Delete($pk)
	{
		$sql = self::$db->prepare('DELETE FROM ' . static::$tableName . ' WHERE ' . $pk);

		$sql->execute();

		return true;
	}

    public static function Reset($pk)
    {
        $sql = self::$db->prepare('UPDATE commentaires SET signalement=0 WHERE ' . $pk);

        $sql->execute();

        return true;
    }

	public function Update($pk)
	{
		$sql = self::$db->prepare('UPDATE ' . static::$tableName . ' SET ' . self::BuildSQLstring() . ' WHERE ' . $pk);

		$sql->execute();

		return true;
	}

    public function UpdateTitle()
    {
        $titre_site = $_POST['titre_site'];

        $sql = self::$db->prepare('UPDATE options SET titre_site = :titre_site WHERE ID = 1');
        $sql->bindValue(':titre_site', $titre_site);

        $sql->execute();

        return true;
    }
}

?>
