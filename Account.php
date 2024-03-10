<!-- 
    Ce fichier représente la page perso d'un utilisateur
-->
<?php
require_once("head.php");
require_once("database-connection.php");



$userlogin =  $_SESSION["login"];
if (!isset($userlogin)){
    header("location: login.php");
}
?>

<article class="text-center">
    <h2>Mon pokedex</h2>

</article>

<?php 
    echo '<h1> Mes Pokemons</h1>';
$query = $databaseConnection->query("SELECT *
        FROM pokemon INNER JOIN mypokedex ON mypokedex.IdPokemon = pokemon.IdPokemon
        WHERE mypokedex.login = '"  . $_SESSION["login"] . "'");
$pokemons = $query->fetch_all(MYSQLI_ASSOC);
    foreach ($pokemons as $pokemon) {

    echo '<table class="pokemon">';
        echo '<tr>';
        echo '<td>' . $pokemon['NomPokemon'] . '</td>';
        echo '<img src="' . $pokemon['urlPhoto'] . '" alt="' . $pokemon['NomPokemon'] . '">';
        echo '<td>id: ' . $pokemon["IdPokemon"] . '</td>';
        echo '<td>PV: ' . $pokemon['PV'] . '</td>';
        echo '<td>Attaque: ' . $pokemon['Attaque'] . '</td>';
        echo '<td>Defense: ' . $pokemon['Defense'] . '</td>';
        echo '<td>Vitesse: ' . $pokemon['Vitesse'] . '</td>';
        echo '<td>Special: ' . $pokemon['Special'] . '</td>';
        echo '<td>date capture: ' . $pokemon['date'] . '</td>';
        echo '</tr>';
        echo '</table>';
}
?>


<?php
require_once("footer.php");
?>