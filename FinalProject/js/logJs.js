function checkName() {
    var logName = document.getElementById('loginName').value;
    if (logName.length > 4) {
        document.getElementById("usernameLoading").innerHTML = "First name is valid";
        document.getElementById("usernameLoading").style.alignContent = "right";
        document.getElementById("usernameLoading").style.color = "green";
        return true;

    }
    else {
        document.getElementById("usernameLoading").innerHTML = "First name not valid";
        document.getElementById("usernameLoading").style.alignContent = "right";
        document.getElementById("usernameLoading").style.color = "red";
        return false;

    }
}


function checkPass() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+([a-z].*[A-Z])|([A-Z].*[a-z])/;

    var pass = document.getElementById("loginPass").value;

    if ((format.test(pass) && pass.length > 8)) {

        document.getElementById("passwordLoading").innerHTML = "password  is valid";
        document.getElementById("passwordLoading").style.alignContent = "right";
        document.getElementById("passwordLoading").style.color = "green";
        return true;
    }
    else {
        document.getElementById("passwordLoading").innerHTML = "password  is not valid";
        document.getElementById("passwordLoading").style.alignContent = "right";
        document.getElementById("passwordLoading").style.color = "red";

        return false;

    }
}

function formcheck() {
    if (checkName() == true && checkPass() == true) {
        return true;
    }
    else {
        return false;
    }
}
function checkError(){
    document.getElementById("Error").innerHTML = "Name or Password doesb't match";
}


