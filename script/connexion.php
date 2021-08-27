  <?php 
        session_start();
        require_once 'config.php';
        
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

                    // $check va verifié si la personne est deja dans la bdd
            $check = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
            $check->execute(array($email));
                    // on stock les données dans data et va rechercher avec fech
            $data = $check->fetch();
                    // rowcount va verifier si y a dans la table
            $row = $check->rowCount();
                // si la valeur row = 1 est que a la personne existe

            if($row == 1)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    
                    if(password_verify($password, $data['password']))
                    {
                        $_SESSION['user'] = $data['pseudo'];
                        $_SESSION['id'] = $data['id'];
                        $_SESSION['type_user'] = $data['type_user'];
                        header('Location:../landing.php');  
                        die();

                        
                    }else{ header('Location:../index.php?login_err=password'); die(); }
                }else{ header('Location:../index.php?login_err=email'); die(); }
            }else{ header('Location:../index.php?login_err=already'); die(); }
        }
