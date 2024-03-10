

<?php
require_once("head.php");

require_once("database-connection.php");

?>
<?php



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
 
</head>
<body>
    <div>
        <p>se connecter :</p>
        <form action="attempt-login.php" method="POST">
            <div class="input-field">
                <label for="login">Login</label>
                <input 
                id="login" 
                type="text" 
                name="login" 
                placeholder="saisir votre login"
                autocomplete="true"
                />
            </div>   
            
            <div class="input-field">
                <label>Mot de passe</label>
                <input 
                id="login" 
                type="password" 
                name="password" 
                placeholder="saisir votre mot de passe"
                autocomplete="true"
                >
            </div>
            <div class="form-group">
                <input type="submit" value="je me connecte">
            </div>   
            <p>vous n'avez pas de compte <a href="register.php">clic ici</a>.</p>
        </form>
    </div>    
</body>
</html>
<?php
require_once("footer.php");
?>