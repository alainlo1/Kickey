<?php
  $bdd = mysqli_connect("localhost", "root", "", "kickey");

   if (isset($_POST['submit'])) {
   	// Le nom de l'image
   	$image = $_FILES['image']['name'];
   	// la partie text
   	$nom_jeux = mysqli_real_escape_string($bdd, $_POST['nom_jeux']);

   	// ou il va telecharger les images
   	$target = "../set/jeux/".basename($image);

   	$sql = "INSERT INTO type_jeux (image, nom_jeux) VALUES ('$image', '$nom_jeux')";
  
   	mysqli_query($bdd, $sql);

   	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
   		$msg = "Le nouveaux jeux a été ajouté";
   	}else{
   		$msg = "BUUUUG";
   	}header('Location:../ajouter_jeux.php');
   }
   $result = mysqli_query($bdd, "SELECT * FROM type_jeux ORDER BY nom_jeux  ");


// $imgDone = false;
// $statusMsg = '';
// $dir = 'set/jeux/';

// if(isset($_POST['submit']) && !empty($_FILES['image']['name'])){

// 	$allowTypes = array('png');
// 	$fileName = basename($_FILES['image']['name']);
// 	$target = $dir.$fileName;

// 	$type = pathinfo($target, PATHINFO_EXTENSION);


// 		if(in_array($type, $allowTypes)){
// 			if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
// 				$nom_jeux = mysqli_real_escape_string($bdd, $_POST['nom_jeux']);
// 				$req = $bdd->prepare('INSERT INTO type_jeux(image, nom_jeux ) VALUES (?,?)');
// 				$req->execute(array($fileName, $nom_jeux));
// 				if($req) {
// 					$statusMsg = 'Le fichier a bien ete chargé';
// 					$imgDone = true;
// 				} else {
// 					$statusMsg = 'Le fichier a pas ete envoyé';
// 				}
// 			}else{
// 				$statusMsg = 'type non  autorisé';
// 			}
// 		}else{
// 			$statusMsg = 'Selectioner un fichier a charger';
// 		}
// }
// $req = mysqli_query($bdd, "SELECT * FROM type_jeux");

?>




