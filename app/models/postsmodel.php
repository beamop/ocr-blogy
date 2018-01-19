<?php

namespace siav\Models;
use siav\Lib\AbstractModel;

class PostsModel extends AbstractModel
{
	public $ID;
	public $titre_post;
	public $contenu_post;
	public $auteur_post;
	public $date_post;

	protected static $tableName = 'posts';

	protected $tableSchema = array(
		'titre_post',
		'contenu_post',
		'auteur_post',
		'date_post'
    );

	public static function getPost4() 
	{
	    $sql = "SELECT * FROM posts ORDER BY ID DESC LIMIT 0,4";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
	}

	public static function getPosts() 
	{
	    $sql = "SELECT * FROM posts ORDER BY ID DESC";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
	}

	public static function getPost($id)
	{
		$sql = "SELECT ID, titre_post, contenu_post, auteur_post, date_post FROM posts WHERE ID = '$id'";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        return $result;
	}

    public static function nPosts()
    {
        $sql = "SELECT * FROM posts";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->rowCount();
        return $result;
    }

	public static function mainlpost()
	{
		$sql = "SELECT * FROM posts ORDER BY ID DESC LIMIT 0,6";
        $query = parent::$db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
	}
}