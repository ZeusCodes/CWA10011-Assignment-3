//  * Author: Pallab Paul-103484306
//  * Target: apply.php
//  * Purpose: assignment 2
//  * Created: sept 2021
//  * Last Updated: 26 sept 2021
"use strict";

function myFunction() {
  document.getElementById("dropDownMenu").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches("#dropDownLink")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};
document.getElementById("dropDownLink").onclick = myFunction;
