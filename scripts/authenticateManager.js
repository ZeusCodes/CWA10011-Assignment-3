function checkPassword(){
    let pass = document.getElementById("Password").value;
    let rePass = document.getElementById("ConPassword").value;
    if(pass === rePass){
        return true
    }
    document.getElementById("mismatchedPassword").textContent = " Your Password should match the above password";
    return false
}


function initialize(){
    //Authentication
    var register = document.getElementById("registerManager");
    register.onsubmit = checkPassword;
}

window.onload = initialize ;