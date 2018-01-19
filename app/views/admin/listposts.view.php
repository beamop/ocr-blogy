<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= HOST_NAME ?>admin"><?= TITLE ?> - Panel</a>
      </li>
      <li class="breadcrumb-item active">Liste des posts</li>
    </ol>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Liste des posts</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
                <th>Date</th>
                <th>Options</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
                <th>Date</th>
                <th>Options</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($pposts as $ppost) : ?>
                
                  <tr>
                    <td><?= htmlspecialchars($ppost['titre_post']) ?></td>
                    <td><?= $this->limitEcho($ppost['contenu_post'], 100) ?></td>
                    <td><?= $ppost['auteur_post'] ?></td>
                    <td><?= $ppost['date_post'] ?></td>
                    <td>
                    <a href="javascript:confirmDel(<?= $ppost['ID'] ?>)" style="color: #fff;"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                    <a href="<?= HOST_NAME ?>admin/editpost/<?= $ppost['ID'] ?>" style="color: #fff;"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    </td>
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

<script>
    function confirmDel($ID) {
      swal({
        title: "Êtes-vous sûr?!",
        text: "Une fois le post supprimé, il ne vous sera pas possible de le récupérer.",
        icon: "warning",
        buttons: true,
        dangerMode: true
      })
      .then((confirmOK) => {
        if (confirmOK) {
          window.location = "<?= HOST_NAME ?>admin/dpost/" + $ID;
          swal("Super, le post a bien été supprimé!", {
            icon: "success",
          });
        } else {
          swal("L'opération a bien été annulée!");
        }
      });
    }
</script>
