<?php
require_once("head.php");
require_once("database-connection.php");

$id = $_GET['id'];

$query = $databaseConnection->query("SELECT * FROM pokemon WHERE IdPokemon = " . $id);

if (!$query) {
    echo "Erreur SQL : " . $databaseConnection->error;
} else {

// $queryprevious = $databaseConnection->query("SELECT idPokemon FROM evolutionpokemon WHERE idEvolution = " . $id);
// if ($queryprevious) {
//     $previous = $queryprevious->fetch_assoc();
//     if ($previous) {
//         $querypreviousDetails = $databaseConnection->query("SELECT * FROM pokemon WHERE IdPokemon = " . $previous['idEvolution']);
//         if ($querypreviousDetails) {
//             $previousDetails = $querypreviousDetails->fetch_assoc();
//             echo '<h2>Évolution : ' . $previousDetails['NomPokemon'] . '</h2>';
//             echo '<img src="' . $previousDetails['urlPhoto'] . '" alt="' . $previousDetails['NomPokemon'] . '">';
//             echo '<p>PV: ' . $previousDetails['PV'] . '</p>';
//             echo '<p>Attaque: ' . $previousDetails['Attaque'] . '</p>';
//             echo '<p>Defense: ' . $previousDetails['Defense'] . '</p>';
//             echo '<p>Vitesse: ' . $previousDetails['Vitesse'] . '</p>';
//             echo '<p>Special: ' . $previousDetails['Special'] . '</p>';
//         }
//     }
// }


    $pokemon = $query->fetch_assoc();
    echo '<h1>' . $pokemon['NomPokemon'] . '</h1>';
    echo '<img src="' . $pokemon['urlPhoto'] . '" alt="' . $pokemon['NomPokemon'] . '">';
    echo '<p>PV: ' . $pokemon['PV'] . '</p>';
    echo '<p>Attaque: ' . $pokemon['Attaque'] . '</p>';
    echo '<p>Defense: ' . $pokemon['Defense'] . '</p>';
    echo '<p>Vitesse: ' . $pokemon['Vitesse'] . '</p>';
    echo '<p>Special: ' . $pokemon['Special'] . '</p>';


    $queryEvolution = $databaseConnection->query("SELECT idEvolution FROM evolutionpokemon WHERE idPokemon = " . $id);
    if ($queryEvolution) {
        $evolution = $queryEvolution->fetch_assoc();
        if ($evolution) {
            $queryEvolutionDetails = $databaseConnection->query("SELECT * FROM pokemon WHERE IdPokemon = " . $evolution['idEvolution']);
            if ($queryEvolutionDetails) {
                $evolutionDetails = $queryEvolutionDetails->fetch_assoc();
                echo '<h2>Évolution : ' . $evolutionDetails['NomPokemon'] . '</h2>';
                echo '<img src="' . $evolutionDetails['urlPhoto'] . '" alt="' . $evolutionDetails['NomPokemon'] . '">';
                echo '<p>PV: ' . $evolutionDetails['PV'] . '</p>';
                echo '<p>Attaque: ' . $evolutionDetails['Attaque'] . '</p>';
                echo '<p>Defense: ' . $evolutionDetails['Defense'] . '</p>';
                echo '<p>Vitesse: ' . $evolutionDetails['Vitesse'] . '</p>';
                echo '<p>Special: ' . $evolutionDetails['Special'] . '</p>';
            }
        }
    }
}

require_once("footer.php");
?>