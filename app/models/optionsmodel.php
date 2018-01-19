<?php

namespace siav\Models;
use siav\Lib\AbstractModel;

class OptionsModel extends AbstractModel
{
    public static function getTitle()
    {
        $sql = "SELECT titre_site FROM options WHERE ID = 1";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        return $result[0];
    }
}