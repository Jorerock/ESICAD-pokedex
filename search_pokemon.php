<!-- 
    Ce fichier représente la page de résultats de recherche de pokémons du site.
-->
<?php
require_once("head.php");
require_once("database-connection.php");
?>


   
<table class = "tableau_pokemon">
<thead class = "tableau_all">
    <th>Numéro</th>
    <th>Nom</th>
    <th>Photo</th>

<?php 
$queryPokemon = $databaseConnection->query("SELECT * from pokemon Where NomPokemon LIKE '%" . $_GET['q'] . "%'");

if (!$queryPokemon) {
    echo 'Erreur SQL : " . $databaseConnection->error"';}
else {
    $pokemons = $queryPokemon->fetch_all(MYSQLI_ASSOC);
    foreach ($pokemons as $pokemon) {
        echo '<tr>';
        echo '<td>' . $pokemon["IdPokemon"] . '</td>';
        echo '<td><a href="info.php?id=' . $pokemon['IdPokemon'] . '">' . $pokemon['NomPokemon'] . '</a></td>';
        echo '<td><a href="info.php?id=' . $pokemon['IdPokemon'] . '"><img src="' . $pokemon['urlPhoto'] . '" alt="' . $pokemon['NomPokemon'] . '"></a></td>';
        echo '</tr>';
    }
}
?>

</thead>
</table>
    
<?php
require_once("footer.php");
?>