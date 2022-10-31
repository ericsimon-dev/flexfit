<button type="button" class="btn color-button-add sizing-btn btn-block btn-lg mb-5 ms-5 mt-5" data-toggle="modal" data-target="#myModal">Ajouter une Structure</button>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ajouter une structure</h4>
        <button type="button" class="btn-close" data-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form role="form" action="" method="POST" id="form-part">
          <div class="mb-3">
            <label class="form-label required">Raison sociale :</label>
            <input type="text" class="form-control" name="part" id="inputName" placeholder="BasicFit Nantes">
          </div>
          <div class="mb-3">
            <label class="form-label required">Email :</label>
            <input type="email" class="form-control" name="mail" id="inputEmail" placeholder="eric@simon.fr">
          </div>
          <div class="mb-3">
            <label class="form-label required">Adresse complète :</label>
            <input class="form-control" placeholder="13 rue du biceps 44000 Nantes" id="inputAdress" name="adress"></input>
          </div>
        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="submitContactForm()">Envoyer</button>
        <button type="button" class="btn btn-danger submitBtn" data-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>
<script>function submitContactForm() {
    reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    part = $('#inputName').val();
    if (part.trim() == '') {
        alert('Entrez votre raison sociale.');
        $('#inputName').focus();
        return false;
    } else {
        $.ajax({
            url: "modele/insert_partenaire.php",
            type: "POST",
            data: { part: part },
            cache: false,
            success: function(dataResult) {
                dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $("#butsave").removeAttr("disabled");
                    $('#fupForm').find('input:text').val('');
                    $("#success").show();
                    $('#success').html('Data added successfully !');
                } else if (dataResult.statusCode == 201) {
                    alert("Error occured !");
                }

            }
        })
    }
}
</script>