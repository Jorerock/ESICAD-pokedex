<!-- 
    Ce fichier représente la page de liste de tous les pokémons.
-->

<?php
require_once("head.php");

require_once("database-connection.php");

?>
<pre>
    
    <table class = "tableau_pokemon">
    <thead class = "tableau_all">
        <th>Numéro</th>
        <th>Nom</th>
        <th>Photo</th>
<?php
$query = $databaseConnection->query("SELECT * from pokemon");

if (!$query) {
    throw new RuntimeException ("Cannot execute query. Cause : " . mysqli_error($connection)); 
} else {
    $pokemons = $query->fetch_all(MYSQLI_ASSOC);
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
    
    </pre>
<?php
require_once("footer.php");
?>