<?php
session_start();
include('menu.php');

require 'script/config.php';
require 'script/compteur.php';

if($_SESSION['type_user']=='utilisateur'){
    header('Location:landing.php');
}


?>

        <div class="page_contenu">

            <div class="kickey_stat">
                <h2 style="border-radius:30px;">posts : <?php echo rowCount($bdd, "SELECT * FROM posts"); ?></h2>
                <h2 style="border-radius:30px;">commentaires : <?php echo rowCount($bdd, "SELECT * FROM commentaires"); ?></h2>
                <h2 style="border-radius:30px;">jeux : <?php echo rowCount($bdd, "SELECT * FROM type_jeux"); ?></h2>
                <h2 style="border-radius:30px;">utilisateurs : <?php echo rowCount($bdd, "SELECT * FROM utilisateurs"); ?></h2>
            </div>

                        <div class="d_form">
                            <input type="text" name="search_text" id="search_text" placeholder="rechercher un utilisateur ici" class="form-control" />
                        </div>

                        <div id="resultat2"></div>
        </div >



                <script>
                        $(document).ready(function(){
                            load_data();

                            function load_data(query)
                            {
                                    $.ajax({
                                        url:"script/fetch3.php",
                                        method:"POST",
                                        data:{query:query},
                                        success:function(data)
                                        {
                                            $('#resultat2').html(data);
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

<?php include('menu2.php');?>