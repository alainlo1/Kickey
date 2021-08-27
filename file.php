<?php

if(!isset($_SESSION['user']))
    header('Location:index.php');

require 'script/config.php';
$id = $_GET['id'];


$jeux = $bdd->prepare('SELECT * FROM type_jeux WHERE id_jeux = ? ');
$jeux->execute(array($id));
$jeu=$jeux->fetch();

if(isset($_POST['post_contenu'])) {
   if(!empty($_POST['post_contenu'])) { 
      $post_contenu = htmlspecialchars($_POST['post_contenu']);
      $ins = $bdd->prepare('INSERT INTO posts ( post_contenu, cur_date,id_jeux,id_utilisateurs) VALUES ( ?,?,?,?)');
      $ins->execute(array($post_contenu,date("Y-m-d H:i:s"),$id,$_SESSION['id']));
      $message = 'Votre post a bien été posté';
      echo $message;
    
   } else {
      $message = 'buuuuuuuuuuuug';
   }
}
?> 

   <title><?php echo $jeu['nom_jeux'] ?></title>

    <div class="header_card">
        <img src="img/apexheader.PNG" alt="">
        <div class="textbox">
        <h1><?php echo $jeu['nom_jeux'] ?></h1>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qua voluptate libero sequi voluptas! Rerum?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet a exercitationem odio quos ut, officiis totam ea tempore excepturi! Dignissimos cumque quidem magnam recusandae blanditiis praesentium iure culpa, mollitia eveniet.
        </h4>
        </div>
    </div>



                <!-- DEBUT INPUT -->
                <!-- a la validation du formulaire on envoi les donées sue fonctioion.php -->
                <p id="message"></p> 
                <div class="d_form" >
                            <form method="POST" id="le-form" action="page1?id=<?php echo $id ?>">
                                <input name="post_contenu" id='<?php echo $id ?> ' placeholder="Alors?">
                                <button type="submit" class="boutton" name="submit" value="Envoyer l'article"><i class="far fa-paper-plane"></i></button>
                            </form>
                </div>

                    <!-- FIN INPUT -->

                    <!-- DEBUT TIMELINE -->

                 <!-- <?php if(isset($message)) { echo $message; } ?> -->
                    <?php
                    // c'est pour afficher la tl une fois quon a poté
                        $articles = $bdd->prepare('SELECT posts.id AS post_id,post_contenu,cur_date,pseudo,id_utilisateurs FROM posts,utilisateurs WHERE id_jeux = ? AND id_utilisateurs = utilisateurs.id  ORDER BY cur_date DESC');
                        $articles->execute(array($id));
                    ?>
                        <?php while($a = $articles->fetch()) { ?>
                            <div class="post_card">

                                    <div class="post_pp">
                                        <img src="img/rei.png" alt="">
                                    </div> 
                                    <!-- g:i a -->
                                <div class="post_info">
                                    <div class="post_entt">
                                            <a href="visite.php?id=<?= $a['id_utilisateurs'] ?>"><?= $a['pseudo']?></a>
                                            <span class="date">à <?= date(' H:i - j M, y',strtotime($a['cur_date'])) ?></span>
                                        </div>

                                        <div>
                                            <p class=""><?= $a['post_contenu'] ?></p>
                                        </div>
                                        <div class="reaction">
                                                <a class="commentaire" href="vuepost.php?id=<?= $a['post_id'] ?>">Répondre<i class="far fa-comment-alt"></i></a>
                                        </div>
                                    </div>
                            </div>
                        <?php } ?>


    </div>
