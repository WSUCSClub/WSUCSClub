
<div class="onearticle" id="article<?=trim($article["id"])?>">
<h3><?= $article["title"] ?></h3>
    <span class="category"><?= $article["category"] ?></span>

<p class="info">Updated by <span class="author"><?= $article["author"] ?></span> on <?= $article["date"] ?>  </p>
<?php 
    

    if(trim($article["imagepath"]) == 0) { ?>
        <img src="articles/images/<?= $article["imagepath"] ?>" alt="<?= $article["title"] ?>" onError="this.src='articles/images/noimage.jpg';"> 
    <?php } ?>   
<p class="articletext">
    <?= $article["text"] ?>
    </p>    
  
    
    </div>