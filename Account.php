<!-- 
    Ce fichier représente la page perso d'un utilisateur
-->
<?php
require_once("head.php");
require_once("database-connection.php");


error_reporting(E_ALL);
session_start();
$userlogin =  $_SESSION["login"];
if (!isset($userlogin)){
    header("location: login.php");
}
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