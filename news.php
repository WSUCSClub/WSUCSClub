<!doctype html>
<html lang ="en">
<head> 
	<title>Projects | Computer Science Club</title>
	<meta charset="utf-8">
	<link href="css/style.css" type="text/css" rel="stylesheet" >
    <script type="text/javascript"  src="js/jquery-2.1.1.min-2.js"></script>
    <script type="text/javascript"  src="js/script2.js"></script>

</head>
<body>
    
    
       <?php
         include 'header.php';
        ?>
    
    <?php
        $articlepaths = glob("articles/article*.txt");
    
    $articles = array();
    $news = array();


    foreach ($articlepaths as $articlepath) {
        list($id, $title, $author, $date, $articletype, $category, $imagepath, $text, $thumbnailpath, $shorttext) = file($articlepath); // Split article*.txt into variables
        
    array_push($articles, array("id" => $id,"title" => $title, "author" =>$author,"date" => $date, "articletype" => $articletype, "category" => $category, "imagepath" => $imagepath,"text" => $text,"thumbnailpath" => $thumbnailpath, "shorttext" => $shorttext));     
        }   

 foreach ($articles as $article) { 
        
        if (trim($article["articletype"]) === "article") {
          
            array_push($news, array("id" => $article["id"],"title" => $article["title"], "author" =>$article["author"],"date" => $article["date"], "articletype" => $article["articletype"], "category" => $article["category"], "imagepath" => $article["imagepath"],"text" => $article["text"],"thumbnailpath" => $article["thumbnailpath"], "shorttext" => $article["shorttext"]));
        }
    } 

    ?> 
    

    <div id="content">
         <div id="container">
            <div id="navarticles">
                  <h3>News</h3>

        <ul>

                   
    <?php
    
    foreach ($news as $article) {     ?> 
           
            <li>
               <a href="#article<?= $article["id"] ?>"> <?= $article["title"] ?>
                    <span class="category"><?= $article["category"] ?></span>
</a>
            </li>

    <?php } ?> 
           
        </ul>
    
      </div>
        
    <div id="article"> 
        <?php

    foreach ($news as $article) {    
         include 'onearticle.php';  
    } ?>
    </div>   
        
    </div>            
      </div>  
      <?php
         include 'footer.php';
     ?>
</body>
</html>
