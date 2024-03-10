<?php
require_once("head.php");
require_once("database-connection.php");


session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$ashedpassword = md5($password);


echo ''. $login. '';
echo ''. $password. '';

$user = $databaseConnection->query("SELECT * FROM user WHERE login ='$login' AND password ='$password'")->fetch_assoc();

if(isset($user)){
    $_SESSION['login'] = $user['login'];
    $_SESSION["nom"] = $user["nom"];
    $_SESSION["prenom"] = $user["prenom"];
    header("location: account.php");
}
else{
    header("location: index.php");
}

?>
