//  * Author: Pallab Paul-103484306
//  * Target: apply.php
//  * Purpose: assignment 2
//  * Created: sept 2021
//  * Last Updated: 26 sept 2021
"use strict";

function initialize(){

    var applyJob = document.getElementById("Q49F3");
    applyJob.onclick = ()=> storeJob("Q49F3")    
    applyJob = document.getElementById("Q49F3app");
    applyJob.onclick = ()=> storeJob("Q49F3")    

    applyJob = document.getElementById("S42D9");
    applyJob.onclick = ()=> storeJob("S42D9")
    applyJob = document.getElementById("S42D9app");
    applyJob.onclick = ()=> storeJob("S42D9")

    applyJob = document.getElementById("FS1D6");
    applyJob.onclick = ()=> storeJob("FS1D6")
    applyJob = document.getElementById("FS1D6app");
    applyJob.onclick = ()=> storeJob("FS1D6")

}

function storeJob(RefNum) {
    localStorage.ref = RefNum
    location.href = "./apply.php";
}

window.onload = initialize ;z