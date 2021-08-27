<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
        require 'script/config.php';
        require 'script/ajouter.php';

    
?>

<?php include('menu.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    
    <title>Kickey</title>
</head>

    
    <body>
        <div class="page_contenu">
            
                    <div class="bannier">
                        <video autoplay muted loop>
                                <source src="img/bg.mp4" type="video/mp4">
                        </video>
                        <div class="contenu">
                            <h2><span style="color:yellow;">K</span>ICK3Y</h2>
                        </div>
                    </div>

                    <h2 class="jeuxh2">Liste des jeux</h2>

                    <div class="d_form">
                        <input type="text" name="search_text" id="search_text" placeholder="rechercher un jeu ici" class="form-control" />
                    </div>

                    <div id="resultat" class="liste_jeux"></div>
                    
                    <button onclick="topFunction()" id="myBtn"><i class="far fa-arrow-alt-circle-up"></i></button>
                    <script src="js/app.js"></script>
                    <!-- <div class="container">
                        <div class="liste_jeux"> -->
                            <?php
                                // while ($row = mysqli_fetch_array($result)) {
                                // echo "<a href='page1.php?id=". $row['id_jeux']."'>
                                //         <div id='img_div' class='jeux'>";
                                //         echo "
                                //             <div class='titrebox'>
                                //                 <h3>".$row['nom_jeux']."</h3>
                                //             </div>
                                //         ";
                                //         echo "  <div class='imgbox'>
                                //                     <img src='set/jeux/".$row['image']."' >
                                //                 </div>   
                                //                 ";
                                // echo "</div>
                                // </a>";
                                // }
                            ?>
                        <!-- </div>
                   </div> -->
                   <?php include('menu2.php');?>

                   <script>
                        $(document).ready(function(){
                            load_data();

                            function load_data(query)
                            {
                                    $.ajax({
                                        url:"script/fetch2.php",
                                        method:"POST",
                                        data:{query:query},
                                        success:function(data)
                                        {
                                            $('#resultat').html(data);
                                        }
                                    });
                            }
                        $('#search_text').keyup(function(){
                            var search = $(this).val();
                                if(search != ''){
                                    load_data(search);  
                                }else{
                                    load_data();
                                }
                            });
                        });
                    </script>
    </body>
</html>