<?php

// Classe qui gère la connexion à la BDD
class Manager
{
    protected function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8;port=3308', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // POUR TEST : À SUPPRIMER UNE FOIS TOUT EN PLACE
        } catch (PDOException $e) {
            echo "Échec : " . $e->getMessage();
        }

        return $db;
    }
}
