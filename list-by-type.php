 <!-- 
    Ce fichier représente la page de liste de tous les pokémons.
-->
<?php
require_once("head.php");
require_once("database-connection.php");
?>

<?php


// ***********************************************************************************************

$queryTypes = $databaseConnection->query("SELECT DISTINCT libelleType FROM typepokemon ORDER BY libelleType");

if (!$queryTypes) {
    echo "Impossbile de recuperer les types : " . $databaseConnection->error;
} else {
    while ($type = $queryTypes->fetch_assoc()) {
        echo '<h2>' . $type['libelleType'] . '</h2>';
        
// ***********************************************************************************************
        
        echo '<table class="tableau_pokemon">';
        echo '<thead class="tableau_all">';
        echo '    <th>Nom</th>';
        echo '    <th>Photo</th>';
        echo '</thead>';

        $query = $databaseConnection->query("SELECT pokemon.IdPokemon, pokemon.NomPokemon, pokemon.urlPhoto
        FROM pokemon INNER JOIN typepokemon ON pokemon.IdTypePokemon = typepokemon.IdType 
        WHERE typepokemon.libelleType = '" . $type['libelleType'] . "' ORDER BY pokemon.IdPokemon");
        
        if (!$query) {
            throw new RuntimeException ("Cannot execute query. Cause : " . mysqli_error($connection)); 
        } else {
            $pokemons = $query->fetch_all(MYSQLI_ASSOC);
            foreach ($pokemons as $pokemon) {
                echo '<tr>';
                echo '<td><a href="info.php?id=' . $pokemon['IdPokemon'] . '">' . $pokemon['NomPokemon'] . '</a></td>';
                echo '<td><a href="info.php?id=' . $pokemon['IdPokemon'] . '"><img src="' . $pokemon['urlPhoto'] . '" alt="' . $pokemon['NomPokemon'] . '"></a></td>';
                echo '</tr>';
            }
        }

        echo '</table>';

    }
 }  
?>

<pre>
    

<?php

?>
    </thead>
</table>
    
    </pre>
<?php
require_once("footer.php");
?>