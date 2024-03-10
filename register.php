<?php
require_once("head.php");
require_once("database-connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <p>Crée votre compte :</p>
        <form action="add-user.php" method="POST">

                
            <div class="input-field">
                    <label for="nom">nom</label>
                    <input 
                    id="nom" 
                    type="text" 
                    name="nom" 
                    placeholder="saisir votre nom"
                    />
                </div>   
            
                                
            <div class="input-field">
                    <label for="prenom">prenom</label>
                    <input 
                    id="prenom" 
                    type="text" 
                    name="prenom" 
                    placeholder="saisir votre prenom"
                    />
                </div>   


            <div class="input-field">
                <label for="login">Login</label>
                <input 
                id="login" 
                type="text" 
                name="login" 
                placeholder="saisir votre login"
                />
            </div>   
            
            <div class="input-field">
                <label>Mot de passe</label>
                <input 
                id="login" 
                type="password" 
                name="password" 
                placeholder="saisir votre mot de passe"
                >
            </div>
            <div class="form-group">
                <input type="submit" value="je m'inscrit">
            </div>   
            <p>vous avez deja un compte <a href="login.php">clic ici</a>.</p>
        </form>
    </div>    
</body>
</html>
