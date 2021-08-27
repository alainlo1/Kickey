<?php
    session_start();

    require 'script/config.php';
     require 'script/ajouter.php';


    if($_SESSION['type_user']=='utilisateur'){
        header('Location:landing.php');
    }
    
  

?>
   <?php include('menu.php');?>

        <div class="page_contenu">
        
            <div class="d_form">
                <form style="display:flex;" method="POST" action="script/ajouter.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        <input type="text" id="text" cols="" rows="" name="nom_jeux" placeholder="keep it trill nigga"></textarea>
                    </div>
                    <div>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <button type="submit" name="submit"><i class="fas fa-plus"></i></button>
                    </div>
                </form>
            </div>


            <div class="container">
                        <div class="liste_jeux">
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                echo "<a href='page1.php?id=". $row['id_jeux']."'>
                                        <div id='img_div' class='jeux'>";
                                        echo "
                                            <div class='titrebox'>
                                                <h3>".$row['nom_jeux']."</h3>
                                            </div>
                                        ";
                                        echo "  <div class='imgbox'>
                                                    <img src='set/jeux/".$row['image']."' >
                                                </div>   
                                                ";
                                echo "</div>
                                </a>";
                                }
                            ?>
                        </div>
                   </div>
        </div>



        
<?php include('menu2.php');?>

