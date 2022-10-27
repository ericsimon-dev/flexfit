function submitContactForm() {
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