<?php

// Classe qui gère la connexion à la BDD
class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=coursp4;charset=utf8;port=3308', 'root', '');
        return $db;
    }
}