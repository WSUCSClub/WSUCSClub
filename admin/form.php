

<form action="addproject.php"  method="POST">
    <p>Add a new article</p>    

    <ul>  
                
        <li>    <label>Title: <input type="text" name="title" placeholder="Enter your title here" required /> </label> </li>
         <li>   <label>Author: <input type="text"  name="author"  placeholder="Who's writing the article" required /> </label></li>

          <li>  <label>Text: <textarea name="text" placeholder="So, what's up? You can include html in the textfield" required></textarea> </label></li>
          <li>  <label><textarea name="shorttext" placeholder="write a short text to be displayed on the main page" required></textarea> </label></li>


                  <li>  <label>Article Type: <input type="radio" name="articletype" value="article" >Article
                                     <input type="radio" name="articletype" value="project" >Project </label></li>
          <li>  <label>Category (if it is an article): 
                            <br>
                                     <input type="radio" name="category" value="Tech" >Tech<br>
                                     <input type="radio" name="category" value="Tech" >WSU CSC<br>
                                     <input type="radio" name="category" value="Winona" >Winona </label> 
          </li>
          <li>  <label>An image to attract readers:  <input type="file"  name="image"  required /></label>
         </li> 
        
        
           <li> <input type="hidden" name="date" value="<?= $date  ?>"> </li>
           <li> <input type="hidden" name="id" value="<?= $filecount+1 ?>"></li>

            <li> <input type="submit" value="Submit" class="button"></li>
        </ul>    

     </form>
      


