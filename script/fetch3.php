<?php
require 'config.php';
$output = '';
require '../menu.php';
if(isset($_POST["query"]))
{
 $query = $bdd->prepare( "
  SELECT * FROM utilisateurs 
  WHERE email LIKE ?
  OR pseudo LIKE  ?

 ");
 $val1='%'.$_POST['query'].'%';
 $val2='%'.$_POST['query'].'%';
 $query->execute(array($val1,$val2));

}
else
{
    $query = $bdd->prepare("SELECT * FROM utilisateurs ");
    $query->execute();
}

if($query->rowCount() > 0)
{

 while($resultat = $query->fetch(PDO::FETCH_ASSOC))
 {
  $output .= 
            "<table style='color: white;'>


                <tr> 
                    <td>".$resultat['email']."</td>
                    <td>".$resultat['pseudo']."</td>
                    <td><a class='side_post' href='script/user_sup.php?id=".$resultat['id']."'><i class='fas fa-trash-alt' style='margin-left:100%;'></i></td>
                <tr> 
            <table>

            ";
 }
 echo $output;
}
else
{
 echo "<p class='alert'>Aucun resulat</p>";
}

?>