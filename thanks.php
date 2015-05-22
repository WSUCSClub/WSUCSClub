<!doctype html>
<html lang ="en">
<head> 
	<title>Thanks | Computer Science Club</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" >
    <script type="text/javascript"  src="js/jquery-2.1.1.min-2.js"></script>

	<meta charset="utf-8">
</head>
<body>
    
    
         <?php
         include 'header.php';
        ?>
    
        <div id="thanks">
                   <div id="thankyoubox">

            <?php 


 if( (isset( $_POST["first_name"])) and (isset( $_POST["last_name"])) and (isset($_POST["email"])) and (isset($_POST["website"])) and (isset($_POST["message"])))  {

        $first_name= $_POST["first_name"];
        $last_name= $_POST["last_name"];
        $email= $_POST["email"];
        $website= $_POST["website"];
        $message= $_POST["message"];

        file_put_contents("contact.txt", "$first_name\r", FILE_APPEND); 
        file_put_contents("contact.txt", "$last_name\r", FILE_APPEND); 
        file_put_contents("contact.txt", "$email\r", FILE_APPEND); 
        file_put_contents("contact.txt", "$website\r", FILE_APPEND); 
        file_put_contents("contact.txt", "$message\r", FILE_APPEND); 
 
                   print "Thank you $first_name !"; 
     }

            ?>  
                    </div>   
        </div>
    
         <?php
         include 'footer.php';
     ?>
</body>
</html>