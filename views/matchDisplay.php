<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title></title>
</head>
<body>
    <div class="container_card">
        <div class="match_card" id="match">
            <div class="info_section">
                <div class="match_header">
                    <h1> <?php echo $lieuMatchs ?> </h1>
                    <h4><?php echo $dateMatchs ?></h4>
                    <span class="pays"><?php echo $paysMatchs ?></span>
                    <p class="joueur"><?php echo $prenomJoueur.' '.$nomJoueur.' - '.$prenomJoueur2.' '.$nomJoueur2 ?></p>
                    <img class="locandina"src= "<?php echo $avatarJoueur ?>" >
                    <img class="locandina"src= "<?php echo $avatarJoueur2 ?>" >
                </div>
            </div>
            <div class="blur_back bright_back">
                <img src="<?php echo $avatarLieuMatchs ?>"/>
            </div>
        </div>
    </div> <!-- End container-->
</body>
</html>