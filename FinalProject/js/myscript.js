
function checkName()
{
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    var getName = document.getElementById("name").value;

    if(format.test(getName))
    {
        document.getElementById("fnameError").innerHTML="Name is valid";
        document.getElementById("fnameError").innerHTML.style.color = "green";
        return true;
    }

    else
    {
        document.getElementById("fnameError").innerHTML = "Name is not valid";
        document.getElementById("fnameError").innerHTML.style.color="red";
    }
}