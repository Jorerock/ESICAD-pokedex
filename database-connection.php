<?php
/*
Ce fichier permet de définir un objet de connexion $databaseConnection 
que vous pouvez utiliser dans chaque page qui nécessite de faire une requête au SGBD
Il suffit d'utiliser l'instruction require_once("database_connection.php") 
pour que la variable $databaseConnection soit utilisable dans votre page
*/
global $databaseConnection;

/* A COMPLETER : remplacer les paramètres pour se connecter à votre base de données de pokémon */
$databaseConnection = mysqli_connect(
    'localhost',
    "root",
    NULL,
    "pokedex",
    3306
);
?>