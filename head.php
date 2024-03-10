<!-- 
    Ce fichier contient le début du document HTML et de sa balise <head>
    Il permet de charger le fichier de styles CSS, le JS le cas échéant... 
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex Du Professeur Chen</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/svg" href="assets/pokeball.svg" />
</head>

<body>
    <header>

<?php
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION["login"])){
    echo '<table>';
    echo '<tr>';
    echo '<td>login: vous n etes pas connecté </td>';
    echo '</tr>';
    echo '</table>';
}else{
echo '<table>';
echo '<tr>';
echo '<td>login: ' . $_SESSION["login"] . '</td>';
echo '<td>nom: ' . $_SESSION["nom"] . '</td>';
echo '<td>prenom: ' . $_SESSION["prenom"] . '</td>';
echo '</tr>';
echo '</table>';
}


?>



        <a href="index.php">
            <h1>Pokedex Du Professeur Chen</h1>
        </a>
        
        
        <form id="search-bar" action="search_pokemon.php">
            <span class="input-group">
                <input id="q" name="q" type="search" placeholder="Rechercher un pokémon"><button type="submit">🔎</button>
            </span>
        </form>
    </header>

    <div id="main-wrapper">


        <?php
        require_once("menu.php");
        ?>
        <main id="main">