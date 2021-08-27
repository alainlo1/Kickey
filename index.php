<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
             <link rel="stylesheet" href="css/form.css">
             <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
             <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
            <title>Connexion</title>
        </head>
        <body>
        <div class="container">
        <div class="form-container">  
            <div class="signin-signup">
                <form action="script/connexion.php" method="post" class="sign-in-form">
                    <?php 
                // deja il verifie si le get existe sinon il affiche un err
                    if(isset($_GET['login_err']))
                    {
                        $err = htmlspecialchars($_GET['login_err']);
                        // utiliser un switch a la place de plein de esle if pou afficher chaque err
                        switch($err)
                        {
                            case 'password':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> mot de passe incorrect
                                </div>
                            <?php
                            break;

                            case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email incorrect
                                </div>
                            <?php
                            break;

                            case 'already':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte non existant
                                </div>
                            <?php
                            break;
                        }
                    }
                    ?> 

<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>


                    <h2 class="title">Se connecter</h2>
                    <div class="input-cha">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="Email" required="required" autocomplete="off">
                    </div>
                    <div class="input-cha">
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                    </div>
                    <input type="submit" value="Se connecter" class="btn solid">

                    <p class="social-text">Lorem, ipsum dolor sit amet consectetur</p>
                   
                    <div class="reseaux">
                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </form>


                <form action="script/inscription_traitement.php" method="post" enctype="multipart/form-data" class="sign-up-form">
                <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
                    <h2 class="title">S'enregistrer</h2>
                    <div class="input-cha">
                        <i class="fas fa-user"></i>
                        <input type="pseudo" name="pseudo"  placeholder="pseudo" required="required" autocomplete="off">
                    </div>
                    <div class="input-cha">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email"  placeholder="Email" required="required" autocomplete="off">
                    </div>
                    <div class="input-cha">
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                    </div>
                    <div class="input-cha">
                        <i class="fas fa-key"></i>
                        <input type="password" name="password_retype" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                    </div>
                    <div class="input-cha">
                        <i class="fas fa-user"></i>
                        <input type="file" name="image">
                    </div>
                    
                    <input type="submit" value="S'enregistrer" class="btn solid">
                    <p class="social-text">Fait nous de la pub</p>
                    <div class="reseaux">
                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </form>

            </div>
        </div>

        <div class="panel-container">
            <div class="panel gauche-panel">
                <div class="contenu">
                    <h3> Tu es nouveau ?</h3>
                    <p>Lorem ipsum, dolor sit amet</p>
                    <button class="btn transparent" id="sign-up-btn">S'inscrire</button>
                </div>
                <img src="img/undraw_video_game_night_8h8m.svg" class="image" alt="">
            </div>

            <div class="panel droite-panel">
                <div class="contenu">
                    <h3>Déjà inscrit?</h3>
                    <p>Lorem ipsum, dolor sit amet</p>
                    <button class="btn transparent" id="sign-in-btn">Se connecter</button>
                </div>
                <img src="img/undraw_gaming_6oy3.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>

        </body>
</html>