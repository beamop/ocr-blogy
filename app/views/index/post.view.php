<?php if ($post != null) : ?>

	<header class="masthead" style="background-image: url('<?= IMAGES_DIR ?>posts-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?= htmlspecialchars($post['titre_post']) ?></h1>
              <!--<h2 class="subheading"></h2>-->
              <span class="meta">De
                <a href="#"><?= htmlspecialchars($post['auteur_post']) ?></a>
                le <?= $this->mySQLDateRewriting($post['date_post']) ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <?= $post['contenu_post'] ?>

            <p style="color: #0009;"><?= $post['auteur_post'] ?>.</p>
            
            <div class="comments">
              <div class="comment-wrap">
                  <div class="photo">
                      <div class="avatar" style="background-image: url('<?= IMAGES_DIR ?>comment-avatar.png')"></div>
                  </div>
                  <div class="comment-block">


                      <form action="<?= HOST_NAME ?>index/comment" method="post">

                          <textarea name="commentaire" cols="30" rows="3" placeholder="Ajouter commentaire..." required data-validation-required-message="Merci d'ajouter un commentaire valide."></textarea>
                          <textarea name="auteur" cols="30" rows="3" placeholder="Auteur..." style="height: 25px;width: 30%;margin: 15px 0px 5px 0;" required data-validation-required-message="Merci d'ajouter un auteur valide."></textarea>
                          <div class="bottom-comment">
                              <ul class="comment-actions">
                                  <button name="submit" type="submit" class="form-control">Ajouter commentaire</button>
                              </ul>
                          </div>
                          <div class="form-group" style="display: none;">
                            <input type="text" class="form-control" id="idpost" name="idpost" placeholder="Mon nouveau post!" value="<?= htmlspecialchars($post['ID']) ?>">
                          </div>
                      </form>
                  </div>
              </div>
            </div>

            <?php foreach ($comments as $lcom): ?>

                <div class="comment-wrap">
                  <div class="photo">
                      <div class="avatar" style="background-image: url('<?= IMAGES_DIR ?>comment-avatar.png')"></div>
                  </div>
                  <div class="comment-block">
                      <p class="comment-text"><?= htmlspecialchars($lcom['commentaire']) ?></p>
                      <div class="bottom-comment">
                          <div class="comment-date">Le <?= $lcom['date_commentaire'] . ' par ' . htmlspecialchars($lcom['auteur']) ?> - <a href="javascript:confirmSig(<?= $post['ID'] ?>)">Signaler <i class="fa fa-flag-o" aria-hidden="true"></i></a></div>
                      </div>
                  </div>
                </div>
            
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </article>

<?php else : ?>

    <?php header('Location: ' . HOST_NAME . '/index/post'); ?>

<?php endif; ?>

<script>
    function confirmSig($ID) {
        swal({
            title: "Êtes-vous sûr?!",
            text: "Une fois le commentaire signalé, il ne vous sera pas possible d'annuler votre signalement.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((confirmOK) => {
            if (confirmOK) {
                window.location = "<?= HOST_NAME ?>index/scom/c/" + $ID;
                swal("Super, le commentaire a bien été signalé!", {
                    icon: "success",
                });
            } else {
                swal("L'opération a bien été annulée!");
            }
        });
    }
</script>