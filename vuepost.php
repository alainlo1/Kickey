<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
require 'menu.php';
require 'script/config.php';

$id = $_GET['id'];
$articles = $bdd->query('SELECT * FROM posts,utilisateurs  
WHERE posts.id = '. $id.' AND id_utilisateurs = utilisateurs.id');



if(isset($_POST['com_contenu'])) {
    if(!empty($_POST['com_contenu'])) { 
       $com_contenu = htmlspecialchars($_POST['com_contenu']);
       $ins = $bdd->prepare('INSERT INTO commentaires ( com_contenu, id_post,id_utilisateurs, cur_date ) VALUES ( ?,?,?,?)');
       $ins->execute(array($com_contenu,$id, $_SESSION['id'],date("Y-m-d H:i:s")));
        $message = 'Votre commentaire a bien été posté';
    } else {
       $message = 'Veuillez remplir le champs';
    }
 }


?>
            <div class="page_contenu">
               <div class="vue_card">
                        <?php while($a = $articles->fetch()) { ?>
                            <div class="post_card">

                                    <div class="post_pp">
                                        <img src="<?php echo "set/avatar/".$a['avatar'] ?>" alt="">
                                    </div> 

                                <div class="post_info">
                                    <div class="post_entt">
                                            <a><?= $a['pseudo']?></a>
                                            <span class="date"><?= date(' H:i - j M, y',strtotime($a['cur_date'])) ?></span>
                                        </div>

                                        <div>
                                            <p class=""><?= $a['post_contenu'] ?></p>
                                        </div>
                                    </div>
                            </div>
                  <?php } ?>
                </div>

                <div class="d_form" >
                            <form method="POST" action="vuepost.php?id=<?php echo $id ?>">
                                <input type="text" name="com_contenu" placeholder="Laissez un commentaire">
                                <button type="submit" class="boutton" name="submit" 
                                value=""><i class="far fa-paper-plane"></i></button>
                            </form>
                </div>

                <!-- <?php if(isset($message)) { echo $message; } ?> -->
                <?php 
                       // c'est pour afficher la les commes une fois quon a poté
                     $commentaires = $bdd->prepare('SELECT * FROM commentaires,utilisateurs WHERE id_post = '. $id.' AND id_utilisateurs = utilisateurs.id');
                     $commentaires->execute(array($id));
                ?>

                        <?php while($a = $commentaires->fetch()) { ?>
                            <div class="post_card">

                                    <div class="post_pp">
                                        <img src="<?php echo "set/avatar/".$a['avatar'] ?>" alt="">
                                    </div> 

                                <div class="post_info">
                                    <div class="post_entt">
                                            <a>@<?= $a['pseudo']?></a>
                                            <span class="date">à <?= date(' H:i - j M, y',strtotime($a['cur_date'])) ?></span>
                                        </div>

                                        <div>
                                            <p class=""><?= $a['com_contenu'] ?></p>
                                        </div>
                                    </div>
                            </div>
                        <?php } ?>
                            <button onclick="topFunction()" id="myBtn"><i class="far fa-arrow-alt-circle-up"></i></button>
                            <script src="js/app.js"></script>
            </div>
               <?php include('menu2.php');?>



