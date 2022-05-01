<?php
include('../models/matchs.php');
include('../config/bdd.php');
include('../views/listeMatchs.php');

$matchs = new Matchs();
$allMatchs = $matchs->readMatchsU();

$nomJoueur = null;

while($donnees = $allMatchs->fetch()){
    if($nomJoueur==null){
    $dateMatchs = $donnees['dateMatchs'];
    $lieuMatchs = $donnees['lieuMatchs'];
    $paysMatchs = $donnees['paysMatchs'];
    $avatarLieuMatchs = $donnees['avatarLieuMatchs'];
    $nomJoueur = $donnees['nomJoueur'];
    $prenomJoueur = $donnees['prenomJoueur'];
    $avatarJoueur = $donnees['avatarJoueur'];
    // echo $lieuMatchs, '<br>';
    // echo $dateMatchs, '<br>';
    // echo $prenomJoueur, ' ', $nomJoueur ,'<br>';
    }
    else if ($nomJoueur!=null){
        $nomJoueur2 = $donnees['nomJoueur'];
        $prenomJoueur2 = $donnees['prenomJoueur'];
        $avatarJoueur2 = $donnees['avatarJoueur'];
        // echo $prenomJoueur2, ' ', $nomJoueur2 ,'<br>';
        include('../views/matchDisplay.php');
        $nomJoueur = null;
    }
}
?>