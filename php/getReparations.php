<?php 
        require('connexion.php');
        // Create connection
        $db = data_base_connect();
        $article = $db->prepare("SELECT * from demande_");
        try {
            $article->execute();
            $result = $article->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        $myJSON = json_encode($result);
        echo $myJSON;
?>