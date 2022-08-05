//FIRST WAY
//document.getElementById("haveAcc").innerHTML="You have not account?";//HTML document jekhane js ke call kora hoy
//js die lekha change korbo
//id die khuje ber korbo, innerHTML for lekha change, type/method change korar jonno different property

//js ke head tag er vetore rakhle o print korbe na,browser inner html khuje pabe na. niche rakhle fully interpreted hoy html code ta
//SECOND WAY: DEFAULT PRINTING:
//document.write("Defaulf print");

//THIRD WAY:
//alert("HI");

//FOURTH WAY:
//console.log("my error");
function checkName() {
    var nameLen = document.getElementById("fname").value;
    if (nameLen.length < 4) {
        document.getElementById("nameError").innerHTML = "Name not valid";
        document.getElementById("nameError").style.color = "red";
        return false;
    }
    else {

        document.getElementById("nameError").innerHTML = "valid"; 
        document.getElementById("nameError").style.color = "green";
        return true;
    }
}

function checkRadio()
{
    if(document.getElementById("male").checked==true || document.getElementById("female").checked==true)
    {
        return true;
    }
    else
    {
        document.getElementById("radioError").innerHTML = "Please check a radio";
        document.getElementById("radioError").style.color="red";
        return false;
    }
}


function formcheck() {

    if (checkName() == true && checkRadio()==true) {
        return true;
    }
    else 
    {
    return false;
}
}