<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="../style.css">
<title>Inscription</title>
</head>
<body>
    <?php
        include('../views/inc/header.php');
    ?>

    <!-- inscrption Section -->
    <div class="container">
    <div class="left">
        <div class="header">
            <h2 class="animation a1">INSCRIPTION</h2>
            <h4 class="animation a2">Indiquez les informations pour vous inscrire</h4>
        </div>
        <div class="form">
        <form id="form_text" action="../controllers/sInscrire.php" method="POST">
                <input type="text" class="form-field animation a2" name="prenom" placeholder="Prénom" id="prenom" required>
                <input type="text" class="form-field animation a3" name="nom" placeholder="Nom" id="nom" required>
                <input type="text" class="form-field animation a4" name="loginUser" placeholder="Pseudo" id="loginUser" required>
                <input type="password"  class="form-field animation a5" name="mdp" placeholder="Mot de passe" id="mdp" required>
                <p class="animation a5"><a href="../views/connexion.php">Déjà un compte ?</a></p>
                <button type="submit" class="animation a6" value="Valider">Inscription</button>
            </form>
        </div>
    </div>
    <div class="right2"></div>
</div>
</body>
</html>