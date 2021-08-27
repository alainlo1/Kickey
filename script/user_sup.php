<?php
    require('config.php');
        $id = $_GET['id'];
        $supp = $bdd->prepare("DELETE  FROM  utilisateurs WHERE id = ?");
        $supp->execute(array($id));
        header('location:../stat.php');
?>