<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Connexion</title>
</head>
<body>
    <?php
        include('../views/inc/header.php');
    ?>
    <div class="container">
    <div class="left">
        <div class="header">
            <h2 class="animation a1">CONNEXION</h2>
            <h4 class="animation a2">Connectez vous en utilisant votre pseudo et votre mot de passe.</h4>
        </div>
        <div class="form">
            <form id="form_text" action="../controllers/seConnecter.php" method="POST">
                <input type="text" class="form-field animation a3" name="loginUser" placeholder="Login" id="loginUser" required>
                <input type="password" class="form-field animation a4" name="mdp" placeholder="Mot de passe" id="mdp" required>
                <p class="animation a5"><a href="../views/inscription.php">Pas encore membre ?</a></p>
                <button class="animation a6" type="submit" value="Valider">Connexion</button>
            </form>
        </div>
    </div>
    <div class="right"></div>
</div>

</body>
</html>