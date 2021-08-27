<?php
require 'config.php';
$output = '';
if(isset($_POST["query"])){
    $query = $bdd->prepare( "
      SELECT * FROM posts 
      WHERE post_contenu LIKE ?
    ");
        $val1='%'.$_POST['query'].'%';
        $query->execute(array($val1));
        }else{
              $query = $bdd->prepare("SELECT * FROM posts ORDER BY cur_date");
              $query->execute();
              }

if($query->rowCount() > 0)
{

 while($resultat = $query->fetch(PDO::FETCH_ASSOC))
 {
  $output .= '
    <a class="side_post" href="vuepost.php?id='.$resultat['id'].'">
        <div class="re_card">
            <div class="side_info">
                    <p>'.$resultat["post_contenu"].'</p>
                    </div>

                    <div>
                    </div>
        </div>
    </a>
    
  ';
 }
 echo $output;
}
else
{
 echo "<p class='alert'>Aucun resulat</p>";
}

?>