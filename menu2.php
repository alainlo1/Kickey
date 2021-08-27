<?php
include('menu.php');

require 'script/config.php';
$articles = $bdd->prepare('SELECT * FROM posts ORDER BY cur_date DESC LIMIT 3');
$articles->execute();

//  $jeux = $bdd->prepare('SELECT * FROM type_jeux WHERE id_jeux = ? ');
//  $jeux->execute(array($id));
//  $jeu=$jeux->fetch();
// $articles->execute(array($id));
// echo $id;

?> 


 <link rel="stylesheet" href="css/style.css">
  
<div class="sidebar2">
    <H2>Derniers posts</H2>
                        <?php while($a = $articles->fetch()) { ?>
                            <a class="side_post" href="vuepost.php?id=<?= $a['id'] ?>">
                                <div class="side_card">
                                    <div class="side_info">
                                            <h4><span class="date">à <?= date(' H:i - j M, y',strtotime($a['cur_date'])) ?></span></h4>
                                            </div>

                                            <div>
                                                <p class=""><?= $a['post_contenu'] ?></p>
                                            </div>
                                </div>
                            </a>
                         <?php } ?>
</div>
