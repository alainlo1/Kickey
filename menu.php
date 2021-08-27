<?php
    // session_start(); 
    // if(!isset($_SESSION['user'])){
    //     header('location:index.php');
    // }   
    require 'script/config.php';
    if(!isset($_SESSION['id'])){
        session_start();
    }
    $users = $bdd->prepare("SELECT avatar FROM utilisateurs WHERE id = ? ");
    $users->execute(array($_SESSION['id']));
    $myuser=$users->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
     <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>

<div class="sidebar">
    
         <input class="lamerda" type="checkbox" id=check>
        <label for="check" class="checkbtn"> <i class="fas fa-bars"></i></label>
        <label for="" class="logo"><a href="landing.php"><span style="color:yellow;">K</span>ICK3Y<i class="fas fa-home"></i></a></label>
            <ul>
                <?php
                    if(isset($_SESSION['type_user']) && $_SESSION['type_user']=='admin'){
                        ?>
                                <li class="ajouter"><a href="ajouter_jeux.php">Ajouter jeux<i class="fas fa-compress"></i></a></li>
                                <li class="ajouter"><a href="stat.php">Gestion<i class="fas fa-compress"></i></a></li>
                        <?php      
                    }
                ?>  
                <li><a href="recherche.php">Recherche<i class="fas fa-search"></i></a></li> 
                <li class="lia"><a href="profile.php" style="color:yellow;margin-right:20px;"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="profile.php" style="margin-right:20px;"><img class="menu_pp" src="<?php echo "set/avatar/".$myuser['avatar'] ?>" alt=""></a></li>
                <li><a href="script/deconnexion.php" style="" >Déconnexion<i class="fas fa-door-open"></i></a></li>
            </ul>
</div>


            

            

  