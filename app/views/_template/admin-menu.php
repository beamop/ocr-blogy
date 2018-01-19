<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/admin"><?= TITLE . ' - '?>Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableau de bord">
          <a class="nav-link" href="/admin">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Tableau de bord</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Liste des posts">
          <a class="nav-link" href="/admin/listposts">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Liste des posts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Liste des commentaires">
          <a class="nav-link" href="/admin/listcommentaires">
            <i class="fa fa-fw fa-comments-o"></i>
            <span class="nav-link-text">Liste des commentaires</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ajouter un post">
          <a class="nav-link" href="/admin/ajouterpost">
            <i class="fa fa-fw fa-file-text-o"></i>
            <span class="nav-link-text">Ajouter un post</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ajouter un post">
          <a class="nav-link" href="/admin/options">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Options</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alertes
              <span class="badge badge-pill badge-warning">1</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Alertes :</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong><i class="fa fa-long-arrow-up fa-fw"></i>Status</strong>
              </span>
              <span class="small float-right text-muted"><?= date('G\h:i') ?></span>
              <div class="dropdown-message small">Aucun problème n'a été détecté.</div>
              </a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Recherche...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/deconnexion">
            <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
        </li>
      </ul>
    </div>
</nav>