function checkID()
{
    var nid = document.getElementById("number").value;
    var format = /CGA-[0-9]/
    if(format.test(nid))
    {
        document.getElementById("numError").innerHTML = "You are correct";
        document.getElementById("numError").style.color = "green";
        return true;

    }
    else{
        document.getElementById("numError").innerHTML = "*ID/Service number is not correct*";
        document.getElementById("numError").style.color = "red";
        return false;
    }
}

function formcheck(){
    if (checkID() == true)
    {
        
        return true;
    }
    else
    {  return false;

    }
}