
<!--
    Malek Hakim
    CS313       
    Prof: Dr. Joan Francioni
    This is the add project page.-->


<!doctype html>
<html lang ="en">
<head> 
	<title>WSU CS Club | Administration</title>
	<meta charset="utf-8">
    <link href="style/adminstyle.css" type="text/css" rel="stylesheet">
    <script type="text/javascript"  src="js/adminscript.js"></script>
    <script type="text/javascript"  src="js/jquery-2.1.1.min-2.js"></script>

   
</head>
<body>
    <?php // counting how many articles already published to 
        
        $directory = '../articles/';
        $files = glob($directory . 'article*.txt');
        $filecount = count( $files ); 
        date_default_timezone_set('UTC');
        $date = date('l jS \of F Y h:i:s A');
        $id = $filecount+1;
        $article = array();
        $articlename = "article".$id.".txt";



    if (isset($_POST["image"])) {
            $image = $_POST["image"];
    }

    else {$image = "noimage.jpg";}

    $imagethumbnail = "thumb1.jpg"; 

   
    if( (isset($_POST["title"]))  and (isset($_POST["author"])) and (isset($_POST["articletype"])) and (isset($_POST["category"])) and (isset($_POST["text"])) and (isset($_POST["shorttext"])))  {

        $title = $_POST["title"];
        $author = $_POST["author"];
        $articletype = $_POST["articletype"];
        $category = $_POST["category"];
        $text = $_POST["text"];
        $shorttext = $_POST["shorttext"];
        
            array_push($article, $id,$title,$author,$date, $articletype,$category, $image,$text,$imagethumbnail, $shorttext);     

        foreach ($article as $line) {
        trim($line,"\t\n\r\0\x0B");
            file_put_contents($directory . $articlename, $line.PHP_EOL, FILE_APPEND);
        }
        
        
        

        
       
?>
    

    <div id="topbar">
             <p id="message">Article Submitted and published</p>
    </div>
    
     <?php    
    }
    ?>
     
    <div id="buttons">
    
        <ul>
           <li> <button class="blue" id="addarticle"> Add a new article/project </button> </li>

         </ul>
            
         <ul>
             
           <li><button><a href="../index.php">Preview website</a></button></li>

         </ul>
        
        
    </div>
        
    <div id="container">
     <div id="form">
        <?php
         include 'form.php';
        ?>
    </div>
     
   </div>
    
</body>
</html>