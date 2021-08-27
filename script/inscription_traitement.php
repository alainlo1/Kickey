
 <?php 
    require_once 'config.php';
        // y v'erifie que toute les variable post existe
        if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) 
        && isset($_POST['password_retype'])&& isset($_FILES['image']))
                // on va stocker ca danns des htmlspecialcharts
        
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

                // $check va verifié si la personne est deja dans la bdd
        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
              // on stock les données dans data et va rechercher avec fech
        $data = $check->fetch();
        $row = $check->rowCount();

           // la valeur de row est zero c'est que la personne n'est pas dasn la base de donéé
        if($row == 0){ 
            if(strlen($pseudo) <= 100){
                                            
                // verifie qu'y a marqué un vrai mail
                if(strlen($email) <= 100){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password == $password_retype){
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            $avatar=$_FILES["image"]["name"];
                            move_uploaded_file($_FILES["image"]["tmp_name"],"../set/avatar/" . basename($_FILES["image"]["name"]));
                             // y va inserer tout ca dasn la bdd et aulieux d'utiliser des point ds'interogation je vais utiliser  un tablaeux associative
                            $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, type_user, avatar) VALUES(:pseudo, :email, :password, :type_user, :avatar)');
                             
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'type_user' => 'utilisateur',
                                'avatar' => $avatar
                            ));

                            header('Location:../index.php?reg_err=success');
                            die();

                        }else{ header('Location:../index.php?reg_err=password'); die();}
                         // il va afficher un err si y pas ecrit un mail
                    }else{ header('Location:../index.php?reg_err=email'); die();}
                       // il va afficher un err si le mail contient plus de 10 caract pcq dans la table j'ai mit 100 caract max
                }else{ header('Location:../index.php?reg_err=email_length'); die();}
                   // il va afficher un err si le pseudo contient plus de 10 caract
            }else{ header('Location:../index.php?reg_err=pseudo_length'); die();}
        }else{ header('Location:../index.php?reg_err=already'); die();}
    }

