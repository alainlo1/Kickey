<?php
    require('config.php');
        $id = $_GET['id'];
        $supp = $bdd->prepare("DELETE FROM  posts WHERE id = ?");
        $supp->execute(array($id));
        header('location:../profile.php');
?>