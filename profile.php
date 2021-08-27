<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
        require 'script/config.php';

        // poour afficher l'image
        $users = $bdd->prepare("SELECT avatar FROM utilisateurs WHERE id = ? ");
        $users->execute(array($_SESSION['id']));
        $myuser=$users->fetch();

        // fonction qui compte
        function rowCount($bdd,$query){
            $stmt = $bdd->prepare($query);
            $stmt->execute();
            return $stmt->rowCount();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>

    <body>
    <?php include('menu.php');?>
            <div class="page_contenu">
                    <div class="haut">
                        <div class="pp">
                            <div class="pp_img">
                                <img class="" src="<?php echo "set/avatar/".$myuser['avatar'] ?>" alt="">         
                            </div>
                            <div class="pseudo">
                                <h2><?php echo $_SESSION['user']; ?></h2>
                            </div>
                            <!-- <a href="user_form.php" style="color:black;"><h4>Modifier<i class="fas fa-user-edit"></i></h4></a> -->
                        </div>
                    </div>
                        <div>
                            <form class="d_form" method="post" action="script/modif_user.php"  enctype="multipart/form-data">
                                <h3><label">Modifier avatar</label></h3>
                                <input type="file" name="image">   
                                <button type="submit" name="Submit" class=""><i class="fas fa-user-edit"></i></button>   
                            </form>
                        </div>

                    <div class="kickey_stat">
                        <h2 style="border-radius:30px;">posts : <?php echo rowCount($bdd, "SELECT * FROM posts WHERE id_utilisateurs  = ".$_SESSION['id']."  "); ?></h2>
                        <h2 style="border-radius:30px;">commentaires : <?php echo rowCount($bdd, "SELECT * FROM commentaires WHERE id_utilisateurs  = ".$_SESSION['id']."  "); ?></h2>
                    </div>



                                        <?php
                                         $articles = $bdd->prepare('SELECT * FROM posts WHERE id_utilisateurs = ? ORDER BY cur_date DESC ');
                                         $articles->execute(array($_SESSION['id']));
                                         while($a = $articles->fetch()) { ?>
                                            <div class="post_card">

                                                    <div class="post_pp">
                                                        <a href="script/post_sup.php?id=<?= $a['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                    </div> 

                                                <div class="post_info">
                                                    <div class="post_entt">
                                                            <span class="date">Le : <?= date(' H:i - j M, y',strtotime($a['cur_date'])) ?></span>
                                                        </div>

                                                        <div>
                                                            <p class=""><?= $a['post_contenu'] ?></p>
                                                        </div>
                                                        <div class="reaction">
                                                                <a class="commentaire" href="vuepost.php?id=<?= $a['id'] ?>">Répondre<i class="far fa-comment-alt"></i></a>
                                                        </div>
                                                    </div>
                                            </div>

                                        <?php }
                                        ?>
                                     <a href=""></a>                                               
                        </div>

             </div>
            <?php include('menu2.php');?>

    </body>
</html>