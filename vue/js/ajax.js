function createInstance()
{
    var req = null;
    if (window.XMLHttpRequest)
    {
         req = new XMLHttpRequest();
    } 
    else if (window.ActiveXObject) 
    {
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e)
        {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) 
            {
                alert("XHR not created");
            }
        }
        }
    return req;
};

function storing(data, element)
{
    element.innerHTML = data;
}

function submitForm(element)
{ 
    var req =  createInstance();

    req.onreadystatechange = function()
    { 
        if(req.readyState == 4)
        {
            if(req.status == 200)
            {
                storing(req.responseText, element);	
            }	
            else	
            {
                alert("Error: returned status code " + req.status + " " + req.statusText);
            }	
        } 
    }; 
    req.open("GET", "controleur/action_ajax.php", true); 
    req.send(null); 
} 