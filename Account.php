<!-- 
    Ce fichier représente la page perso d'un utilisateur
-->
<?php
require_once("head.php");
require_once("database-connection.php");

?>
<article class="text-center">
    <h2>vous Etes connecté</h2>
</article>

<?php 
if (isset($_GET['id'])) {

    $query = $databaseConnection->query("SELECT * from user Where login LIKE '%" . $_GET['q'] . "%'");

}
?>


<?php
require_once("footer.php");
?>