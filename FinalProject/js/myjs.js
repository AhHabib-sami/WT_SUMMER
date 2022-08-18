
function checkName() {

    var getName = document.getElementById("name").value;

    if (getName.length > 4) {
        document.getElementById("fnameError").innerHTML = "Name is valid";
        document.getElementById("fnameError").style.color = "green";
        return true;
    }

    else {
        document.getElementById("fnameError").innerHTML = "Name is not valid";
        document.getElementById("fnameError").style.color = "red";
        return false;
    }
}
function checkUserName() {

    var getUName = document.getElementById("uname").value;

    if (getUName.length > 4) {
        document.getElementById("userNameError").innerHTML = "user name is valid";
        document.getElementById("userNameError").style.color = "green";
        return true;
    }

    else {
        document.getElementById("userNameError").innerHTML = "User name is not valid";
        document.getElementById("userNameError").style.color = "red";
        return false;
    }
}

function checkPass() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    var pass = document.getElementById("pass").value;

    if (format.test(pass)) {
        document.getElementById("passError").innerHTML = "Password is valid";
        document.getElementById("passError").style.color = "green";
        return true;
    }
    else {
        document.getElementById("passError").innerHTML = "Password is not valid";
        document.getElementById("passError").style.color = "red";
        return false;
    }

}

function checkPhone() {
    var phone = document.getElementById("mobile").value;
    var format = /[0-9]/;
    if (format.test(phone)) {
        if (phone.length == 10) {
            document.getElementById("mobileError").innerHTML = "Phone number is valid";
            document.getElementById("mobileError").style.color = "green";
            return true;
        }
        else {
            document.getElementById("mobileError").innerHTML = "Phone number is length is not valid";
            document.getElementById("mobileError").style.color = "red";
            return true;
        }

    }
    else {
        document.getElementById("mobileError").innerHTML = "Phone Number is not valid";
        document.getElementById("mobileError").style.color = "red";
        return false;
    }
}

function checkEmail() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

    var email = document.getElementById("mail").value;

    if ((format.test(email))) {

        document.getElementById("mailError").innerHTML = "Email  is valid";
        document.getElementById("mailError").style.color = "green";
        return true;
    }
    else {
        document.getElementById("mailError").innerHTML = "Email  is not valid";
        document.getElementById("mailError").style.color = "red";
        return false;

    }
}

function checkAge() {
    var age = document.getElementById("age").value;
    var format = /[0-9]/;
    if (format.test(age)) {
        if (age.length == 2) {
            document.getElementById("ageError").innerHTML = "Your age is valid";
            document.getElementById("ageError").style.color = "green";
            return true;
        }
        else {
            document.getElementById("ageError").innerHTML = "Your age is not valid";
            document.getElementById("ageError").style.color = "red";
            return false;
        }


    }
    else {
        document.getElementById("ageError").innerHTML = "Your age is not valid";
        document.getElementById("ageError").style.color = "red";
        return false;
    }
}

function checkGender()
{
    if((document.getElementById("male").checked == true)||(document.getElementById("female").checked == true)||(document.getElementById("other").checked == true))
    {
        document.getElementById("gndErr").innerHTML="Gender Selected";
        document.getElementById("gndErr").style.color="green";
        return true;
    }
    else
    {
        document.getElementById("gndErr").innerHTML="Please select a gender";
        document.getElementById("gndErr").style.color="red";
        return false;
    }
}



function formcheck() {

    if (checkName() == true && checkUserName() == true && checkPhone() == true &&  checkPass() == true && checkEmail()==true && checkAge()==true && checkGender()==true ) {
        
        return true;
    }
    else
    {

        return false;

    }
}