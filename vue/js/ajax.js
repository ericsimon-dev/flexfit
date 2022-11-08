
function modifier_etat_partenaire(id){
    var xhr                 = new XMLHttpRequest();
    var url = "controleur/action_ajax.php";
    
    var myObject = { 'id' : id};
    
    var str             = "data=" + JSON.stringify(myObject);
    
    xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById('message').className = 'okmessage';
        setTimeout("document.getElementById('message').className = 'pasok';", 5000);
    }
    }
    
    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.send("action=etat_partenaire&"+str);
}
function ajouter_partenaire(){
    var xhr                 = new XMLHttpRequest();
    var url = "controleur/action_ajax.php";
    
    var nom          = document.getElementById('inputName').value;
    var mail          = document.getElementById('inputEmail').value;
    var telephone          = document.getElementById('inputPhone').value;
    
    //todo gestion des services
    
    
    var myObject = { 'nom' : nom,'mail' : mail,'telephone' : telephone};
    
    var str             = "data=" + JSON.stringify(myObject);
    
    xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById('message').className = 'okmessage';
        setTimeout("document.getElementById('message').className = 'pasok';", 5000);
    }
    }
    
    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.send("action=ajout_partenaire&"+str);
}