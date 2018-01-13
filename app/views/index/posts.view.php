<?php foreach ($posts as $post): ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <a href="<?= HOST_NAME ?>index/post/<?= $post['ID'] ?>">
          <h2 class="post-title"><?= htmlspecialchars($post['titre_post']) ?></h2>
          <h3 class="post-subtitle"><?= $this->limitEcho($post['contenu_post'], 300); ?></h3>
        </a>
        <p class="post-meta">De
          <a><?= $post['auteur_post'] ?></a>
          le <?= $this->mySQLDateRewriting($post['date_post']) ?></p>
      </div>
      <hr>
    </div>
  </div>
</div>

<?php endforeach; ?>