<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="beamop">
  <title>Connexion</title>
  <link href="<?= VENDOR_DIR ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= VENDOR_DIR ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?= CSS_DIR ?>sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Connexion</div>
      <div class="card-body">
        <form action="login" method="post">
          
          <?php if($erreur == 1) : ?>
              <div class="alert alert-danger" role="alert">
                <strong>Erreur!</strong> Les informations sont incorrectes!
              </div>
          <?php endif; ?>

          <?php if(isset($_GET['d'])) : ?>
              <div class="alert alert-success" role="alert">
                <strong>Super!</strong> Vous êtes maintenant déconnecté.
              </div>
          <?php endif; ?>
          

          <div class="form-group">
            <label for="email">Adresse Email</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" name="email" placeholder="Votre adresse email..." required>
          </div>
          <div class="form-group">
            <label for="pass">Mot de passe</label>
            <input class="form-control" id="pass" type="password" name="pass" placeholder="Votre mot de passe..." required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Se souvenir du mot de passe</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="login">Connexion</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="#">Mot de passe oublié?</a>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= VENDOR_DIR ?>jquery/jquery.min.js"></script>
  <script src="<?= VENDOR_DIR ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= VENDOR_DIR ?>jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
