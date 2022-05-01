<!DOCTYPE html>
<html>
<head>
<title>Accueil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /><!--Wrapper -->
<link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="message">
        <h2>Jouer comporte des risques : endettement, isolement, dépendance.</h2>
        <h3> Pour être aidé, appelez le 09-74-75-13-13 </h3>
    </div>
    <nav class="blend">
        <ul>   
            <div class="logo">
                <img src="./img/logo.png">
                <h1>Parions <span>Tennis</span></h1>
            </div>
            <div class="menu">
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./controllers/liste.php">Matchs</a></li>
            </div>
            <div class="user">
                <?php
                    session_start();
                    if (!isset($_SESSION['loginUser'])){
                    echo '<li><a href="./views/inscription.php">Inscription</a></li>
                        <li><a href="./views/connexion.php">Connexion</a></li>';}
                    else{
                    echo '<li><a href="./views/profil.php">Profil</a></li>
                        <li><a href="./controllers/deconnect.php">Déconnexion</a></li>';}               
                ?>
            </div>
        </ul>
    </nav>

    <!-- SWIPER -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-box">
                    <img class="img_slider" src="./img/kirill-zharkiy-ItKtQ-OaIzQ-unsplash.jpg">
                </div>
                <div class="text_slider">
                    <p class="adress_title" >Matchs en cours</p>                            
                    <h2 class="title_swaper" >ROLAND GARROS</h2>
                    <h3 class="adress_title" >Rafael Nadal - Casper Ruud</h3>
                    <a class="button_template" href="#">Parier </a>
                </div>
            </div>    
            <div class="swiper-slide">
                <div class="slider-box">
                    <img class="img_slider" src="./img/kevin-mueller-7CMKUb9EV90-unsplash.jpg">
                </div>
                <div class="text_slider">
                    <p class="adress_title" >Matchs en cours</p>                            
                    <h2 class="title_swaper" >US OPEN</h2>
                    <h3 class="adress_title" >Novak Djokovic - Alexander Zverev</h3>
                    <a class="button_template" href="#">Parier </a>
                </div>
            </div> 
            <div class="swiper-slide">
                <div class="slider-box">
                    <img class="img_slider" src="./img/despina-galani-fburL0JbyVo-unsplash.jpg">
                </div>
                <div class="text_slider">
                    <p class="adress_title" >Matchs en cours</p>                            
                    <h2 class="title_swaper" >OPEN AUSTRALIE</h2>
                    <h3 class="adress_title" >Matteo Berrettini - Félix Auger-Aliassime</h3>
                    <a class="button_template" href="#">Parier </a>
                </div>
            </div>        
        </div><!--fin du swiper wrapper --> 
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div><!--fin du swiper contenaire -->

    <!-- content -->
    <div class='yop'>
        <p class="adress_title" >Pour vous</p>
        <h1 class='titre_index'>Nos matchs en cours</h1>
        <h3 class="adress_title" >Parier sur votre favoris</h3>
    </div>

    <?php include('controllers/listeIndex.php')?>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>