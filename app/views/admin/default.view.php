  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= HOST_NAME ?>admin">Blogy - Panel</a>
        </li>
        <li class="breadcrumb-item active">Tableau de bord</li>
      </ol>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-table"></i>
              </div>
              <div class="mr-5"><?= $nposts ?> Posts!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?= HOST_NAME ?>admin/listposts">
              <span class="float-left">Voir les posts</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments-o"></i>
              </div>
              <div class="mr-5"><?= $ncoms ?> Commentaires!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/admin/listcommentaires">
              <span class="float-left">Voir les posts</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><?= $nusers ?> Utilisateurs!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Voir les utilisateurs</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Derniers posts</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Contenu</th>
                  <th>Auteur</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Titre</th>
                  <th>Contenu</th>
                  <th>Auteur</th>
                  <th>Date</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($pposts as $ppost) : ?>
                    <tr>
                      <td><?= htmlspecialchars($ppost['titre_post']) ?></td>
                      <td><?= $this->limitEcho($ppost['contenu_post'], 100) ?></td>
                      <td><?= $ppost['auteur_post'] ?></td>
                      <td><?= $ppost['date_post'] ?></td>
                    </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Mis à jour aujourd'hui à <?= date('G \h\e\u\r\e\s \e\t i \m\i\n\u\t\e\s') ?></div>
      </div>
    </div>
  </div>
