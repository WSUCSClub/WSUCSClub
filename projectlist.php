 <?php
        $articlepaths = glob("articles/article*.txt");
    
    $articles = array();    
    $projects = array();


    foreach ($articlepaths as $articlepath) {
        list($id, $title, $author, $date, $articletype, $category, $imagepath, $text, $thumbnailpath, $shorttext) = file($articlepath); // Split article*.txt into variables
        
    array_push($articles, array("id" => $id,"title" => $title, "author" =>$author,"date" => $date, "articletype" => $articletype, "category" => $category, "imagepath" => $imagepath,"text" => $text,"thumbnailpath" => $thumbnailpath, "shorttext" => $shorttext));    

        }   


    foreach ($articles as $article) { 
        
        if (trim($article["articletype"]) === "project") {
            array_push($projects, array("id" => $article["id"],"title" => $article["title"], "author" =>$article["author"],"date" => $article["date"], "articletype" => $article["articletype"], "category" => $article["category"], "imagepath" => $article["imagepath"],"text" => $article["text"],"thumbnailpath" => $article["thumbnailpath"], "shorttext" => $article["shorttext"]));
        }
    } 

    ?>  

<div id="projects" >
             <div id="projects-wrapper" >

                 <h4 class="center">What we have done so far:</h4>
               
                    <ul>
                            <?php
                            $i = 0;
                                foreach ($projects as $article) {     ?> 

                               <li>
                                    <a href="article.php?id=<?= $article["id"] ?>">
                                <img src="articles/thumbnails/<?= $article["thumbnailpath"] ?>" alt="<?= $article["title"] ?>">        
                                 <div class="projectbox-content">
                                    <h3><?= $article["title"] ?></h3> <br><br>
                                   <p><?= $article["shorttext"] ?></p> 
                                 </div>
                                 </a>

                               </li>    

                            <?php     if (++$i == 5) break;
                                } ?>  

                               
                    <li class="seemore">
                        <a href="project.php">
                       <h3>See More</h3>
                       </a>
                   </li>
                   
                </ul> 
              </div>
            </div>   