<!doctype html>
<html lang ="en">
<head> 
	<title>Contact | Computer Science Club</title>
	<meta charset="utf-8">
	<link href="css/style.css" type="text/css" rel="stylesheet" >
    <script type="text/javascript"  src="js/jquery-2.1.1.min-2.js"></script>

</head>
<body>


        <?php
         include 'header.php';
        ?>
        

        <div id="content">            
            <div id="container">
                <h3>Write us something..</h3>
            
            <br>
             
            <div id="form"> 
             <form  method="POST" action="thanks.php">
               <ul>
                   
                <li>  
                  <input type="text" class="first" name="first_name" placeholder="First name" required>
                  <input type="text" class="last"  name="last_name" placeholder="Last name"  required>
                </li>
                <li> 
                  <input type="email" class="email" name="email" placeholder="Your email address" required >
                  <input type="url" class="website"  name="website" placeholder="Your Website" required >
                </li>
                 <li> 
                  <textarea name="message" cols="30" rows="10" placeholder="Your message" required></textarea>
                 </li>
                 <li>
                   <input type="submit" value="submit" class="submit">
                 </li>
                   
                </ul>   
              </form>  
            </div>
            <div id="contact"> 
                
                
                <br>
                <p><span class="courrier">Email:</span> winonastatecsclub@gmail.com</p>
                <p><span class="courrier">Mobile:</span> (612)7022-975</p>
                <p><span class="courrier">Adress:</span> Winona State University <br>175 W. Mark St. Winona MN, 55987</p>
                
                <h3>Public Relation Responsible</h3>
                <p>Hok Lan Ou-Yong (Rachel)</p>
                <p> Zach Spanton</p>
            </div>


              </div>          
        </div>
        
   
          <?php
         include 'footer.php';
     ?>
    
    
</body>
</html>
