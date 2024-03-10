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

echo '<table>';
echo '<tr>';
echo '<td>login: ' . $_SESSION["login"] . '</td>';
echo '<td>nom: ' . $_SESSION["nom"] . '</td>';
echo '<td>prenom: ' . $_SESSION["prenom"] . '</td>';
echo '</tr>';
echo '</table>';


?>


<?php
require_once("footer.php");
?>