<?php
include('./models/matchs.php');
include('./config/bdd.php');

$matchs = new Matchs();
$allMatchs = $matchs->readMatchsU();

$nomJoueur = null;

echo '<div class="carte_index"> ';
while($donnees = $allMatchs->fetch()){
    if($nomJoueur==null){
    $dateMatchs = $donnees['dateMatchs'];
    $lieuMatchs = $donnees['lieuMatchs'];
    $paysMatchs = $donnees['paysMatchs'];
    $avatarLieuMatchs = $donnees['avatarLieuMatchs'];
    $nomJoueur = $donnees['nomJoueur'];
    $prenomJoueur = $donnees['prenomJoueur'];
    $avatarJoueur = $donnees['avatarJoueur'];
    }
    else if ($nomJoueur!=null){
        $nomJoueur2 = $donnees['nomJoueur'];
        $prenomJoueur2 = $donnees['prenomJoueur'];
        $avatarJoueur2 = $donnees['avatarJoueur'];
        include('./views/matchDisplay.php');
        $nomJoueur = null;
    }
}
echo '</div>';
?>