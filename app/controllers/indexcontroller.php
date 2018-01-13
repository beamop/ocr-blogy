<?php

namespace siav\Controllers;
use siav\Lib\AbstractController;
use siav\Models\PostsModel;
use siav\Models\CommentairesModel;

class IndexController extends AbstractController
{

	public function DefaultAction()
	{
		$posts = PostsModel::getPost4();
		$this->_data = ['posts' => $posts];

		$this->SetView();
		$this->Render($this->_view);
	}
	
	public function PostAction()
	{
		if (!isset($this->_params[0])) {
		  //die("L'identifiant du post est incorrect.");
          $this->_view = VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
		}

		$post_id = $this->_params[0];

		$post = PostsModel::getPost($post_id);
		$comments = CommentairesModel::getComment($post_id);

		$this->_data = ['post' => $post, 'comments' => $comments];

		$this->SetView();
		$this->RenderPost($this->_view);
	}

	public function CommentAction()
	{
		if (isset($_POST['submit'])) {

			$comment = new CommentairesModel;

			$comment->ID_post = $_POST['idpost'];
		    $comment->auteur = $_POST['auteur'];
		    $comment->commentaire = $_POST['commentaire'];
		    $comment->date_commentaire = date("Y-m-d");
		    
		    if ($comment->Create()) {
		    	header("location: " . HOST_NAME . "index/post/" . $comment->ID_post);
		    }

		}
	}

	public function ScomAction()
	{
		if (isset($this->_params[0]) AND $this->_params[0] == 'c' OR $this->_params[0] == 'v') {
			$ID_post = $this->_params[1];
			$sql = "UPDATE commentaires SET signalement=signalement + 1 WHERE ID_post='$ID_post'";
			$query = CommentairesModel::$db->query($sql);
			if ($query) {
				header("location: " . HOST_NAME . "index/post/" . $ID_post);
			}
			
		}
	}

	public function PostsAction()
	{
		$posts = PostsModel::getPosts();
		$this->_data = ['posts' => $posts];

		$this->SetView();
		$this->RenderPosts($this->_view);		
	}

	public function AboutAction()
	{
		$this->SetView();
		$this->RenderAbout($this->_view);		
	}

	public function ContactAction()
	{
		$this->SetView();
		$this->RenderContact($this->_view);		
	}
}

?>