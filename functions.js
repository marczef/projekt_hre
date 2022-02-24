function checkButton() {  

    var getSelectedValue = document.querySelector(   
        'input[name="val"]:checked');   
                    
    if(getSelectedValue != null) 
    {   
        document.getElementById("results").innerHTML   
        = getSelectedValue.value   
        + " points";   
    }   
    else 
    {   
        document.getElementById("results").innerHTML   
        = "error"; 
    } 
}