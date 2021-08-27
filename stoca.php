<?php
  include('config.php');
  session_start();

    $imgDone = false;
    // affiche le statu du transfer
    $statusMsg = ''; 
    $dir = '../set/avatar';

    if(isset($_POST['submit']) && !empty($_FILES['img']['name'])) {
        // tableaux des types de fichiers autorisé
        $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
        // basename retourn le nom du fichier débarassé du nom
        $fileName = basename($_FILES['img']['name']);
        $target = $dir.$fileName;
        // retourne l'extension d fichier
        $type = pathinfo($target, PATHINFO_EXTENSION);

        if(in_array($type, $allowtypes)) {
            if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
                $req = $bdd->prepare('UPDATE utilisateurs set avatar = ? WHERE id = ?');
                $req->prepare(array($fileName,$_SESSION['id']));
                if($req){
                    $statusMsg = 'Le fichier a été chargé';
                    $imgDone = true;
                }else{
                    $statusMsg = 'Le fichier n as pas été enregistré';
                }
            }else{
                $statusMsg = 'Erreur lors du chragement du fichier';
            }
        }else {
            $statusMsg = 'type nonn autorisér';
        }

    }else {
        $statusMsg = 'selectionner un fichier';
    }header('Location:../profile.php');

?>
                        <!-- <div>
                            <form class="d_form" method="post" action="script/modif_user.php"  enctype="multipart/form-data">
                                <h3><label">Modifier avatar</label></h3>
                                <input type="file" name="img">   
                                <button type="submit" name="Submit" class=""><i class="fas fa-user-edit"></i></button>   
                            </form>
                        </div> -->