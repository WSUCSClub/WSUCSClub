
<!doctype html>
<html lang ="en">
<head> 
	<title>Projects | Computer Science Club</title>
	<meta charset="utf-8">
	<link href="css/style.css" type="text/css" rel="stylesheet" >
    <script type="text/javascript"  src="js/jquery-2.1.1.min-2.js"></script>
    <script type="text/javascript"  src="js/script.js"></script>
	<!-- This link was added to add a font -->

</head>
<body>

    <?php if (isset($_GET["id"])) {
            $id = $_GET["id"];
    }

    ?>

    
     <?php
    
        $lines = file("articles/article".$id.".txt");

        $article = array("id" => $lines[0],"title" => $lines[1], "author" =>$lines[2],"date" => $lines[3], "articletype" => $lines[4], "category" => $lines[5], "imagepath" => $lines[6],"text" => $lines[7],"thumbnailpath" => $lines[8], "shorttext" => $lines[9]);

    ?> 

       <?php
         include 'header.php';
        ?>
    


    <div id="content">
    <div id="container">    
      <div id="navarticles">
      
    
      </div>
        
    <div id="article"> 
       <?php
            include 'onearticle.php';  
        ?>
    </div>   
        
    </div>            
        </div>
      <?php
         include 'footer.php';
     ?>
</body>
</html>
