<?php 
function echo404(){?>
    <div id="404">
        <h1>ERREUR 404</h1>
        <h3>Circulez</h3>                 
    </div>
<?php }
if(isset($_GET["id"]))
{

    $linkDB = mysqli_connect("127.0.0.1", "root", "", "articles");
    $id=$_GET["id"];
    $requete="SELECT id,titre,content,img FROM article WHERE id=$id";
    $ret=mysqli_query($linkDB,$requete);
    if($ret->num_rows==0)echo404();
    else{
    $unArticle=mysqli_fetch_array($ret); 
                 
?>
                <div class="content-image">
                    <img src="<?php  
                        if($unArticle["img"]!=NULL){
                           echo $unArticle["img"];
                        }
                        else echo "https://via.placeholder.com/150";
                    ?>" alt="<?php  
                    if($unArticle["img"]!=NULL){
                       echo $unArticle["titre"];
                    }
                    else echo "image absente";
                ?>">
                </div>
                <div class="content-text">
                    <h2><?php echo $unArticle["titre"]; ?></h2>
                    <?= $unArticle["content"] ?>
                </div>
                <?php 
               }
            }
               else {
                   ?>
                   echo404();
                <?php
               }
               ?>