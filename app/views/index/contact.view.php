<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Voulez-vous entrer en contact? Remplissez le formulaire ci-dessous pour m'envoyer un message et je reviendrai vers vous dès que possible!</p>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Nom</label>
            <input type="text" class="form-control" placeholder="Nom" id="nom" required data-validation-required-message="Merci d'ajouter votre nom.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Adresse Email</label>
            <input type="email" class="form-control" placeholder="Addresse Email" id="email" required data-validation-required-message="Merci d'ajouter une adresse email.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Tél</label>
            <input type="tel" class="form-control" placeholder="+33 06 05 04 03 02" id="tel" required data-validation-required-message="Merci d'ajouter votre numéro de téléphone.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Merci d'ajouter un message valide."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="envoyer">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>

