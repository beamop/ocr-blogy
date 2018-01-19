<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin"><?= TITLE ?> - Panel</a>
            </li>
            <li class="breadcrumb-item active">Options</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Options</h1>
                <p>Depuis cette page vous pourrez paramétrer <?= TITLE ?>.</p>
            </div>
        </div>
        <form action="<?= HOST_NAME ?>admin/savetitle" method="post">
            <div class="form-group">
                <label>Modifier le titre du site</label>
                <input class="form-control" name="titre_site" placeholder="Nom de mon site" required>
                <small class="form-text text-muted">Actuellement : <?= TITLE ?></small>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
