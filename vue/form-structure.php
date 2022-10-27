<button type="button" class="btn color-button-add w-25 btn-block btn-lg mb-5 ms-5 mt-3" data-bs-toggle="modal" data-bs-target="#myModal">Ajouter une Structure</button>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ajouter une structure</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label required">Raison sociale :</label>
            <input type="text" class="form-control" placeholder="BasicFlex Route de Vannes">
          </div>
          <div class="mb-3">
            <label class="form-label required">Email :</label>
            <input type="email" class="form-control" placeholder="eric@simon.fr">
          </div>
          <div class="mb-3">
            <label class="form-label required">Adresse complète :</label>
            <input class="form-control" placeholder="12 rue du calvaire 44300 Nantes"></input>
          </div>
          <div class="mb-3">
            <label class="mb-1">Services par défaut du Partenaire :</label>
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
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <button type="submit" class="btn btn-danger">Retour</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>