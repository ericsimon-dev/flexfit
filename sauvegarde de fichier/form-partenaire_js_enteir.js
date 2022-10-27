function submitContactForm() {
    reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    part = $('#inputName').val();
    email = $('#inputEmail').val();
    telephone = $('#inputPhone').val();
    if (part.trim() == '') {
        alert('Entrez votre raison sociale.');
        $('#inputName').focus();
        return false;
    } else if (email.trim() == '') {
        alert('Entrez un email.');
        $('#inputEmail').focus();
        return false;
    } else if (email.trim() != '' && !reg.test(email)) {
        alert('Entrez un email valide.');
        $('#inputEmail').focus();
        return false;
    } else if (telephone.trim() == '') {
        alert('Entrez votre numéro de téléphone.');
        $('#inputPhone').focus();
        return false;
    } else {
        $.ajax({
            url: "modele/insert_partenaire.php",
            type: "POST",
            data: {
                part: part,
                email: email,
                telephone: telephone
            },
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