<?php

namespace siav\Models;
use siav\Lib\AbstractModel;

class CommentairesModel extends AbstractModel
{
	public $ID;
	public $ID_post;
	public $auteur;
	public $commentaire;
	public $date_commentaire;
	public $signalement;

	protected static $tableName = 'commentaires';

	protected $tableSchema = array(
		'ID_post',
		'auteur',
		'commentaire',
		'date_commentaire',
		'signalement'
		);

	public static function getComments()
	{
		$sql = "SELECT * FROM commentaires ORDER BY ID DESC";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
	}

	public static function getComment($post_id)
	{
		$sql = "SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, '%d/%m/%Y') AS date_commentaire FROM commentaires WHERE ID_post = '$post_id' ORDER BY ID DESC";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
	}

	public static function nComs()
	{
		$sql = "SELECT * FROM commentaires";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->rowCount();
        return $result;
	}
}