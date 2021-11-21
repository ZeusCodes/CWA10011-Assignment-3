//  * Author: Pallab Paul-103484306
//  * Target: apply.php
//  * Purpose: assignment 2
//  * Created: sept 2021
//  * Last Updated: 26 sept 2021
"use strict";
 
const ageChk = ()=>{
    var dob = document.getElementById("DOB").value;
    var dateOfBirth = new Date(dob)
    var yearOfBirth = dateOfBirth.getFullYear();
    var age = new Date().getFullYear() - yearOfBirth;
    document.getElementById("DOB-err").textContent = ""
    if((age<15) || (age>80)){
        document.getElementById("DOB-err").textContent = "*Age Has to be Between 15 and 80"
        return false
    }
    return true
}

const stateChk = ()=>{
    var postcode = document.getElementById("Postcode").value;
    var postcode = postcode.charAt(0);
    var state = document.getElementById("State").value;
    document.getElementById("Postcode-err").textContent = ""

    if(((postcode==3)||(postcode==8))&&(state == "VIC")){
        //alert(postcode + " | " + state);
        return true
    }else if(((postcode==1)||(postcode==2))&&(state == "NSW")){
        //alert(postcode + " | " + state);
        return true
    }else if(((postcode==4)||(postcode==9))&&(state == "QLD")){
        //alert(postcode + " | " + state);
        return true
    }else if((postcode==0)&&(state == "NT")){
        //alert(postcode + " | " + state);
        return true
    }else if((postcode==6)&&(state == "WA")){
        //alert(postcode + " | " + state);
        return true
    }else if((postcode==5)&&(state == "SA")){
        //alert(postcode + " | " + state);
        return true
    }else if((postcode==7)&&(state == "TAS")){
        //alert(postcode + " | " + state);
        return true
    }else if((postcode==0)&&(state == "ACT")){
        //alert(postcode + " | " + state);
        return true
    }
    document.getElementById("Postcode-err").textContent = "*The State Code Should Match the Postcode"
    return false;
}

function chkSkills(){
    var skills = document.getElementById("OtherSkills").checked ;
    document.getElementById("Skills-err").textContent = ""
    if(skills){
        var otherSkills = document.getElementById("otherSkills").value;
        if(otherSkills.trim() == ""){
            document.getElementById("Skills-err").textContent = "*Please Mention Other Skills or uncheck Others"
            return false
        }
        return true
    }
    return true
}

function checkForm(){
    var age = ageChk();
    var state = stateChk();
    var skills = chkSkills();

    if(age==true && state==true && skills==true){
        storeSession()
        return true
    }else{
        document.getElementById("Form-err").textContent = "*There are errors in Your Form. Please Recheck it."
        return false
    }
}

function storeSession() {
    sessionStorage.firstName = document.getElementById("FName").value;
    sessionStorage.lastName = document.getElementById("LName").value;
    sessionStorage.emailId = document.getElementById("Email").value;
    sessionStorage.phone = document.getElementById("PhNum").value;
    sessionStorage.dob = document.getElementById("DOB").value;
    sessionStorage.street = document.getElementById("Address").value;
    sessionStorage.town = document.getElementById("Town").value;
    sessionStorage.state = document.getElementById("State").value;
    sessionStorage.postcode = document.getElementById("Postcode").value;
    sessionStorage.otherSkills = document.getElementById("otherSkills").value;
    selectedSkills()
    let genders = document.getElementsByName("Gender");

    // for (let i = 0; i < genders.length; i++) {
    //     if (genders[i].checked) {
    //         sessionStorage.gender = genders[i].value
    //     }
    //   }
    genders.forEach((gender) => {
        if (gender.checked) {
            sessionStorage.gender = gender.value
        }
    })
}

function selectedSkills() {
    var arr = ["Java","Networking","DataStorage","Security","Cloud","Communication","OtherSkills"]
    var skills=[]
    arr.forEach((id)=> {
        if(document.getElementById(id).checked == true){
            skills.push(id)
        }
    })
    sessionStorage.setItem("skills", JSON.stringify(skills));
}

function autoFillRefNum() {
    if(localStorage.ref !== undefined){
        document.getElementById("RefNum").readOnly = true
        document.getElementById("RefNum").value = localStorage.ref   
        slider()
    }
}

function autoFillForm() {
    document.getElementById("FName").value = sessionStorage.firstName
    document.getElementById("LName").value = sessionStorage.lastName
    document.getElementById("Email").value = sessionStorage.emailId
    document.getElementById("PhNum").value = sessionStorage.phone
    document.getElementById("DOB").value = sessionStorage.dob
    document.getElementById("Address").value = sessionStorage.street
    document.getElementById("Town").value = sessionStorage.town
    document.getElementById("State").value = sessionStorage.state
    document.getElementById("Postcode").value = sessionStorage.postcode
    document.getElementById(sessionStorage.gender).checked = true
    if(sessionStorage.otherSkills !== undefined)
        document.getElementById("otherSkills").value = sessionStorage.otherSkills
    fillSkills()
}

function fillSkills() {
    var skills = JSON.parse(sessionStorage.getItem("skills"))
    document.getElementById("none").checked = false
    skills.forEach((id)=> {
        document.getElementById(id).checked = true
    })
}

function startTimer(duration, display) {
    var start = Date.now(),diff,minutes,seconds;
    function timer() {
        diff = duration - (((Date.now() - start) / 1000) | 0);

        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if((minutes==1) && (seconds==0)){
            alert("You Have 1-minute to submit the form")
            document.getElementById("time").style.color = "#FF5C58";
        }
        if((minutes==0) && (seconds==0)){
            document.getElementById("RefNum").readOnly = false
            location.href = "./index.php";
        }

        if (diff <= 0) {
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}

function FormReset() {
    document.getElementById("apply-form").reset();
    document.getElementById("RefNum").readOnly = false
    document.getElementById("completionSlider").value = 0;
}

function slider() {
    document.getElementById("completionSlider").stepUp(1);
}

function skillChange() {
    document.getElementById("completionSlider").stepDown(1);
}

function initialize(){

    //Auto Fill Form
    autoFillRefNum()
    if(sessionStorage.firstName !== undefined){
        autoFillForm()
        document.getElementById("completionSlider").value = 110;
    }
    
    var form = document.getElementById("apply-form");
    form.onsubmit = checkForm;

    //Reset Form
    var reset = document.getElementById("resetForm");
    reset.onclick = FormReset;

    //Slider Bar
    form.onchange = slider
    var skillCh = document.getElementById("SkillsChange");
    skillCh.onchange = skillChange;

    //OtherSkills TextArea
    document.getElementById("OtherSkills").onclick = ()=>{
        if(document.getElementById("OtherSkills").checked == true){
            document.getElementById("otherSkills").readOnly =false
        } else{
            document.getElementById("otherSkills").value = ""
            document.getElementById("otherSkills").readOnly =true
        }
    }

    // TIMER
    var fiveMinutes = 60 * 5;
    var display = document.getElementById('time');
    startTimer(fiveMinutes, display);
}

window.onload = initialize ;