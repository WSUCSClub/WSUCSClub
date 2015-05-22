<!doctype html>
<html lang ="en">
<head> 
	<title>Home | Computer Science Club</title>
	<meta charset="utf-8">
	<link href="css/style.css" type="text/css" rel="stylesheet" >
    <script type="text/javascript"  src="js/jquery-2.1.1.min-2.js"></script>
    <script type="text/javascript"  src="js/jquery-ui.js"></script>
    <script type="text/javascript"  src="js/script.js"></script>
    <script type="text/javascript"  src="js/typed.js"></script>
    
</head>
<body>
  
    

       <?php
         include 'header.php';
        ?>
    
        <div id="container-wrapper">

        <div  id="intro">
            <div id="introtext">
               <h4>$(description(){</h4>
                <br>
                    <h4 class="element">  </h4>
                <br>

               <h4>} </h4>

                 <a class="arrowdown" href="#committees">         
                           <img src="images/angle-down.png" alt="angle down"/>  
                 </a>
            </div>
	   </div>
       
       
    <div id="wrapper-purple" >
       <div id="committees" >

            <h4 class="center">We are divided into 3 main committees</h4>


               <ul>
	               <li id="firstcommittee">
                       <a href="article.php?id=3">
                       <img id="Pcommittee" src="images/PCommittee.png" alt="Projects Committee"/>    
                       <h3>Projects Committee</h3>
                       <p>This committee is responsable in developing various projects related to Computer Science, these projects aims to help students create and be innovative... </p> 
                       </a>
                   </li>
                   
	               <li id="secondcommittee">
                        <a href="article.php?id=4">
                       <img id="PDcommittee" src="images/PDCommittee.png" alt="Professional Developement Committee"/>    
                       <h3>Professional Development <br> Committee</h3>
                       <p>This Committee is responsable in  the developing of the student professional skills, establishing networking throught different activities such as talks, conferences and workshops..</p> 
                       </a>
                   </li>
                   
                    <li id="thirdcommittee">
                        <a href="article.php?id=5">         
                       <img id="Mcommittee" src="images/MCommittee.png" alt="Membership Committee"/>    
                       <h3>Membership Committee</h3>
                       <p>This Committee is responsable about recrutements, organizing fun activities in the club to keep good relationship between members, computer science students, professors...</p> 
                       </a>
                   </li>
            </ul> 
                
        </div>
         </div>
     </div>    

          
    

     <?php
         include 'projectlist.php';
         include 'footer.php';
     ?>

</body>
</html>
