<?php
require 'config.php';
$output = '';
require '../menu.php';
if(isset($_POST["query"]))
{
 $query = $bdd->prepare( "
  SELECT * FROM type_jeux 
  WHERE nom_jeux LIKE ?
 ");
 $val1='%'.$_POST['query'].'%';
 $query->execute(array($val1));

}
else
{
    $query = $bdd->prepare("SELECT * FROM type_jeux ORDER BY nom_jeux");
    $query->execute();
}

if($query->rowCount() > 0)
{

 while($resultat = $query->fetch(PDO::FETCH_ASSOC))
 {
  $output .= 
  "<a href='page1.php?id=". $resultat['id_jeux']."'>
                                         <div id='img_div' class='jeux'>

                                             <div class='titrebox'>
                                                 <h3>".$resultat['nom_jeux']."</h3>
                                             </div>
                                        
                                           <div class='imgbox'>
                                                     <img src='set/jeux/".$resultat['image']."' >
                                                 </div>   
                                                 
                                 </div>
                                 </a>";
 }
 echo $output;
}
else
{
 echo "<p class='alert'>Aucun resulat</p>";
}

?>