<?php
require_once("head.php");
require_once("database-connection.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$password = $_POST['password'];


echo ''. $nom . '';
echo ''. $prenom. '';
echo ''. $login. '';
echo ''. $password. '';

$query = $databaseConnection->query("INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES ('" . $nom . "','" . $prenom ."','" . $login ."','" . $password ."')");



// INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES
// ('test','test','test','test')

header("location: index.php")
?>
