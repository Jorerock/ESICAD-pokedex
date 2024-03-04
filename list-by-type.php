<!-- 
    Ce fichier représente la page de liste de tous les pokémons.
-->
<?php
require_once("head.php");

require_once("database-connection.php");
?>
<pre>
    <
    <table class = "tableau_pokemon">
    <thead class = "tableau_all">
        <th>Numéro</th>
        <th>Nom</th>
        <th>Photo</th>
<?php
$query = $databaseConnection->query("SELECT p.NomPokemon, p.urlPhoto ,t.libelleType as 'type1' 
from pokemon P 
JOIN typepokemon T ON P.IdTypePokemon = T.IdType 
JOIN TypePokemon T2 ON P.IdSecondTypePokemon = T2.IdType");

if (!$query) {
    throw new RuntimeException ("Cannot execute query. Cause : " . mysqli_error($connection)); 
} else {
    $pokemons = $query->fetch_all(MYSQLI_ASSOC);
    foreach ($pokemons as $pokemon) {
        echo "
        <tr>

            <td>" . $pokemon["NomPokemon"] . "</td>
            <td><img src='" . $pokemon["urlPhoto"] . "'></td>
        </tr>";
    }
}
?>
    </thead>
</table>
    >
    </pre>
<?php
require_once("footer.php");
?>