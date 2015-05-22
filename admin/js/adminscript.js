"use strict";
window.onload = function() { 
    
    var displayformButton = document.getElementById("addarticle");


    hideform();

    displayformButton.onclick = function(){
        hideform();
        document.getElementById("form").className = "displayed";
    }; 
    
    function hideform() {
        document.getElementById("form").className = "hidden";
    } 

};



