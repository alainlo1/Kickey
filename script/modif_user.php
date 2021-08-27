<?php
  include('config.php');
      session_start();
      if(isset($_FILES['image'])){
         if(isset($_SESSION['user']))
         if(isset($_POST['Submit'])){
                 $post_image=$_FILES["image"]["name"];
                     move_uploaded_file($_FILES["image"]["tmp_name"],"../set/avatar/" . basename($_FILES["image"]["name"]));
                     $stmt = $bdd->prepare("UPDATE utilisateurs set avatar = ? WHERE id = ?");
                     $stmt->execute(array( $post_image,$_SESSION['id']));
                 if($stmt)
                 {
                     header('Location:../profile.php');
                 }
                 else{
                     echo "buuug";
                 } 
        } 
     }else{
        echo "pas de fichier selectioné";
        }
?>

<?php
    //      require 'config.php';
    //      session_start();
    // if(isset($_FILES['image']) AND !empty($_FILES['image']['name'])){
    //     $tailleMax = 2097152;
    //     $extensionValides = array('jpg','jpeg','gif','png');
    //     if($_FILES['image']['size'] <= $tailleMax){
    //         $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'],'.'),1));
    //         if(in_array($extensionUpload, $extensionValides)){
    //             $chemin ="../set/avatar/".$_SESSION['id'].".".$extensionUpload;
    //             $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$chemin);
    //             if($resultat){
    //                 $avatar=$_SESSION['id'].".".$extensionUpload;
    //                 $requete= ($bdd , "UPDATE utilisateurs 
    //                 SET avatar=".$avatar." WHERE id =".$_SESSION["id"]);
    //                 if($requete){
    //                     header("Location:moncompte.php");
    //                 }
    //             }
    //         }
    //     }
    // }



?>