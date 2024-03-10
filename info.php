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
//             echo '<td>PV: ' . $previousDetails['PV'] . '</td>';
//             echo '<td>Attaque: ' . $previousDetails['Attaque'] . '</td>';
//             echo '<td>Defense: ' . $previousDetails['Defense'] . '</td>';
//             echo '<td>Vitesse: ' . $previousDetails['Vitesse'] . '</td>';
//             echo '<td>Special: ' . $previousDetails['Special'] . '</td>';
//         }
//     }
// }


    $pokemon = $query->fetch_assoc();
    echo '<table class="pokemon">';
        echo '<tr>';
        echo '<h1>' . $pokemon['NomPokemon'] . '</h1>';
        echo '<img src="' . $pokemon['urlPhoto'] . '" alt="' . $pokemon['NomPokemon'] . '">';
        echo '<td>id: ' . $pokemon["IdPokemon"] . '</td>';
        echo '<td>PV: ' . $pokemon['PV'] . '</td>';
        echo '<td>Attaque: ' . $pokemon['Attaque'] . '</td>';
        echo '<td>Defense: ' . $pokemon['Defense'] . '</td>';
        echo '<td>Vitesse: ' . $pokemon['Vitesse'] . '</td>';
        echo '<td>Special: ' . $pokemon['Special'] . '</td>';
        echo '</tr>';
        echo '</table>';

    $queryEvolution = $databaseConnection->query("SELECT idEvolution FROM evolutionpokemon WHERE idPokemon = " . $id);
    if ($queryEvolution) {
        $evolution = $queryEvolution->fetch_assoc();
        if ($evolution) {
            $queryEvolutionDetails = $databaseConnection->query("SELECT * FROM pokemon WHERE IdPokemon = " . $evolution['idEvolution']);
            if ($queryEvolutionDetails) {
                $evolutionDetails = $queryEvolutionDetails->fetch_assoc();
                echo '<h2>Évolution : ' . $evolutionDetails['NomPokemon'] . '</h2>';
                echo '<img src="' . $evolutionDetails['urlPhoto'] . '" alt="' . $evolutionDetails['NomPokemon'] . '">';
                echo '<table class="Evolution">';
                echo '<tr>';
                echo '<td>id: ' . $evolutionDetails["IdPokemon"] . '</td>';
                echo '<td>PV: ' . $evolutionDetails['PV'] . '</td>';
                echo '<td>Attaque: ' . $evolutionDetails['Attaque'] . '</td>';
                echo '<td>Defense: ' . $evolutionDetails['Defense'] . '</td>';
                echo '<td>Vitesse: ' . $evolutionDetails['Vitesse'] . '</td>';
                echo '<td>Special: ' . $evolutionDetails['Special'] . '</td>';
                echo '</tr>';
                echo '</table>';
        
            }
        }
    }
}

require_once("footer.php");
?>