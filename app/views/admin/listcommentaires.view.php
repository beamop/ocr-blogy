<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= HOST_NAME ?>admin"><?= TITLE ?> - Panel</a>
      </li>
      <li class="breadcrumb-item active">Liste des commentaires</li>
    </ol>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Liste des commentaires</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Commentaire</th>
                <th>Auteur</th>
                <th>Date</th>
                <th>Signalement</th>
                <th>Options</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Commentaire</th>
                <th>Auteur</th>
                <th>Date</th>
                <th>Signalement</th>
                <th>Options</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($lcom as $rlcom) : ?>
              
                  <tr>
                    <td><?= htmlspecialchars($rlcom['commentaire']) ?></td>
                    <td><?= htmlspecialchars($rlcom['auteur']) ?></td>
                    <td><?= $rlcom['date_commentaire'] ?></td>
                    
                    <td>
                    <?php
                    if($rlcom['signalement'] == 0) {
                      echo('Aucun signalement 👍');
                    } else {
                      echo($rlcom['signalement']);
                    }
                    ?>
                    </td>
                    
                    <td>
                    <a href="javascript:confirmDel(<?= $rlcom['ID'] ?>)" style="color: #fff;"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                    <a href="javascript:confirmRes(<?= $rlcom['ID'] ?>)" style="color: #fff;"><button type="button" class="btn btn-warning"><i class="fa fa-undo" aria-hidden="true"></i></button></a>
                    <a href="<?= HOST_NAME ?>index/post/<?= $rlcom['ID_post'] ?>" target="_blank"><button type="button" class="btn btn-light"><i class="fa fa-external-link" aria-hidden="true"></i></button></a>
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
  
  
  <script>
  function confirmDel($ID) {
    swal({
      title: "Êtes-vous sûr?!",
      text: "Une fois le post supprimé, il ne vous sera pas possible de le récupérer.",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((confirmOK) => {
      if (confirmOK) {
        window.location = "<?= HOST_NAME ?>admin/dcomment/" + $ID;
        swal("Super, le post a bien été supprimé!", {
          icon: "success",
        });
      } else {
        swal("L'opération a bien été annulée!");
      }
    });
  }

  function confirmRes($ID) {
    swal({
      title: "Êtes-vous sûr?!",
      text: "Les signalements du commentaire seront remis à zéro.",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((confirmOK) => {
      if (confirmOK) {
        window.location = "<?= HOST_NAME ?>admin/rcomment/" + $ID;
        swal("Super, les signalements ont bien été retirés!", {
          icon: "success",
        });
      } else {
        swal("L'opération a bien été annulée!");
      }
    });
  }
  </script>
