<button type="button" class="btn color-button-add sizing-btn btn-block btn-lg mb-5 ms-5 mt-5" data-toggle="modal" data-target="#myModal">Ajouter un Partenaire</button>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ajouter un partenaire</h4>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form role="form" action="" method="POST" id="form-part">
          <div class="mb-3">
            <label class="form-label required">Raison sociale :</label>
            <input type="text" class="form-control" name="name" id="inputName" placeholder="BasicFlex">
          </div>
          <div class="mb-3">
            <label class="form-label required">Email :</label>
            <input type="email" class="form-control" name="mail" id="inputEmail" placeholder="eric@simon.fr">
          </div>
          <div class="mb-3">
            <label class="form-label required">Numéro de Téléphone :</label>
            <input class="form-control" placeholder="0678438702" id="inputPhone" name="phone"></input>
          </div>
          <div class="mb-3">
            <label class="mb-1">Services :</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Vente boissons de la marque FlexFlit
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Distributeur alimentaire
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Lavage de serviettes
              </label>
            </div>
          </div>

        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="ajouter_partenaire();">Envoyer</button>
        <button type="button" class="btn btn-danger submitBtn" data-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>