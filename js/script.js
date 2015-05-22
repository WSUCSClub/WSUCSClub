"use strict";
window.onload = function() {
    
    $(function() {
      
       $(function(){
          
            $(".element").typed({
                    strings: ["Hi!","CSC is a group of students who focuses on solving logic problems and expanding their knowledge about technology..."],
                typeSpeed: 0, 
                backDelay: 2000,

        });
        
    });

        
   $(function(){ 
    var PCommittee = document.getElementById("firstcommittee");
    var PDCommittee = document.getElementById("secondcommittee");
    var MCommittee = document.getElementById("thirdcommittee");

   PCommittee.onmouseover= function(){
        document.getElementById("Pcommittee").src="images/PCommittee.gif";
    }
    
    PDCommittee.onmouseover= function(){
        document.getElementById("PDcommittee").src="images/PDCommittee.gif";
    }
    
    MCommittee.onmouseover= function(){
        document.getElementById("Mcommittee").src="images/MCommittee.gif";
    }
    
    PCommittee.onmouseout= function(){
        document.getElementById("Pcommittee").src="images/PCommittee.png";
    }

    PDCommittee.onmouseout= function(){
        document.getElementById("PDcommittee").src="images/PDCommittee.png";
    }

    MCommittee.onmouseout= function(){
        document.getElementById("Mcommittee").src="images/MCommittee.png";
    } 
    
     });
   });
        
    

    
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
    
     $(function() {
         $('#secondcommittee').draggable();
     });
    
    
   /* $window.scroll(function () {
   
    var y = $(this).scrollTop();

    $('#firstcommittee').each(function () {

        var t = $(this).parent().offset().top;
        
        if (y > t) {
            $(this).show( drop, options, 500);
        } 
    });
    });*/

   
}