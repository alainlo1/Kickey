<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
        require 'script/config.php';
        $id = $_GET['id'];
        $infos = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ? ');
        $infos->execute(array($id));
        $info= $infos->fetch();

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
                                <img src="<?php echo "set/avatar/".$info['avatar'] ?>" alt="">         
                            </div>
                            <div class="pseudo">
                                <h2><?= $info['pseudo']?></h2>
                            </div>
                        </div>
                        

                    </div>

 
                            <?php if(isset($message)) { echo $message; } ?>
                                        <?php
                                                $articles = $bdd->prepare('SELECT * FROM posts WHERE id_utilisateurs = ? ');
                                                $articles->execute(array($id));
                                         while($a = $articles->fetch()) { ?>
                                            <div class="post_card">

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
                                                                                    
                        </div>
                        

                       
                    
                    
             </div>



     <?php include('menu2.php');?>

    </body>
</html>