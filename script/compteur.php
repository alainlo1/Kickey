<?php
    function rowCount($bdd,$query){
        $stmt = $bdd->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
?>