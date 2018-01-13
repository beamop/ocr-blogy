<?php

namespace siav\Controllers;
use siav\Lib\AbstractController;
use siav\Models\MembresModel;

class LoginController extends AbstractController
{
	public function DefaultAction()
	{
		require_once LIB_PATH . 'password.php';

		$erreur = 0;

		if(isset($_POST['login'])) {
		  $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
		  $passwordAttempt = !empty($_POST['pass']) ? trim($_POST['pass']) : null;

          $user = (new MembresModel)->authenticate($email);

		  if($user === false) {
		      $erreur = 1;
		  } else {
		    $validPassword = password_verify($passwordAttempt, $user['pass']);
		    if($validPassword) {
		        $_SESSION['user_id'] = $user['ID'];
		        $_SESSION['logged_in'] = time();
		        header('Location:' . HOST_NAME . 'admin');
		        exit;
		    } else {
		        die('Erreur! Les informations sont incorrectes!');
		    }
		  }
		}

		$this->_data = ['erreur' => $erreur];

		$this->SetView();
		$this->RenderOnlyView($this->_view);
	}
}

?>