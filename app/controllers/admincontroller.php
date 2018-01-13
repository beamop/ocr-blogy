<?php

namespace siav\Controllers;
use siav\Lib\AbstractController;
use siav\Models\PostsModel;
use siav\Models\CommentairesModel;
use siav\Models\MembresModel;

class AdminController extends AbstractController
{
	public function DefaultAction()
	{
		$nposts = PostsModel::nPosts();
		$ncoms = CommentairesModel::nComs();
		$nusers = MembresModel::nUsers();
		$mainlpost = PostsModel::mainlpost();

		$this->_data = ['nposts' => $nposts, 
						'ncoms' => $ncoms, 
						'nusers' => $nusers,
						'pposts' => $mainlpost];

		$this->SetView();
		$this->RenderAdmin($this->_view);
	}
	
	public function ListpostsAction()
	{
		$pposts = PostsModel::getPosts();

		$this->_data = ['pposts' => $pposts];

		$this->SetView();
		$this->RenderAdmin($this->_view);
	}

	public function EditpostAction()
	{
		if (!isset($this->_params[0])) {
		  die("L'identifiant du post est incorrect.");
		}

		$id = $this->_params[0];

		$epost = PostsModel::getPost($id);

		$this->_data = ['epost' => $epost];

		$this->SetView();
		$this->RenderAdmin($this->_view);
	}

	public function UpostAction()
	{
		$idpost = $_POST['idpost'];

		$post = new PostsModel;
		$post->titre_post = $_POST['tpost'];
		$post->contenu_post = $_POST['tcontenu'];

		if ($post->Update("ID = '$idpost'")) {
			header("location: " . HOST_NAME . "admin/listposts");
		}
	}

	public function DpostAction()
	{
		if (!isset($this->_params[0])) {
		  die("L'identifiant du post est incorrect.");
		}

		$id = $this->_params[0];
		$post = new PostsModel;
		$comment = new CommentairesModel;

		if ($post->Delete("ID = '$id'")) {
			$comment->Delete("ID_post = '$id'");
			header("location: " . HOST_NAME . "admin/listposts");
		}
	}

	public function ListcommentairesAction()
	{
		$lcom = CommentairesModel::getComments();

		$this->_data = ['lcom' => $lcom];

		$this->SetView();
		$this->RenderAdmin($this->_view);
	}

	public function DcommentAction()
	{
		if (!isset($this->_params[0])) {
		  die("L'identifiant du post est incorrect.");
		}

		$id = $this->_params[0];
		$comment = new CommentairesModel;

		if ($comment->Delete("ID = '$id'")) {
			header("location: " . HOST_NAME . "admin/listcommentaires");
		}
	}

	public function AjouterpostAction()
	{
		$this->SetView();
		$this->RenderAdmin($this->_view);
	}

	public function AddpostAction()
	{
		if (isset($_POST['submit'])) {
			$post = new PostsModel;

			$post->titre_post = $_POST['tpost'];
			$post->contenu_post = $_POST['tcontenu'];
			$post->auteur_post = "Jean Forteroche";
			$post->date_post = date("Y-m-d");
			
			if ($post->Create()) {
				header("location: " . HOST_NAME . "admin/ajouterpost");
			}
		}
	}

	public function DeconnexionAction()
	{
		if(isset($_SESSION['user_id'])) {
			session_destroy();
			unset($_SESSION['user_id']);
			unset($_SESSION['logged_in']);
			header("Location: " . HOST_NAME . "login?d=ok");
		} else {
			header("Location: " . HOST_NAME);
		}
	}
}

?>