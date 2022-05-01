

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Update</title>
</head>
<body>
    <?php
        include('../views/inc/header.php')
    ?>
    <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Modifier votre compte</h3>
    </div>
    <div>
        <div>
            <form id="form_text" action="../controllers/update.php" method="POST">
                <label for='nom'> Changer le nom :</label>
                <input type='text' name='nom' placeholder='Nom' id='nom'>
                <label for='prenom'>Changer le prénom:</label>
                <input type='text' name='prenom' placeholder='Prénom ' id='prenom'>
                <label for='mdp'>Changer le mot de passe</label>
                <input type='text' name='mdp' placeholder='Mot de passe' id='mdp'>
                <label for='mdp'>Changer le pseudo</label>
                <input type='text' name='loginUser' placeholder='Pseudo' id='loginUser'>
                <button type="submit" value="Valider">Modifier</button>
            </form>
        </div>
    </div>

</body>
</html>