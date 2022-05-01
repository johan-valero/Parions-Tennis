    <nav class="blend">
        <ul>   
            <div class="logo">
                <img src="../img/logo.png">
                <h1>Parions <span>Tennis</span></h1>
            </div>
            <div class="menu">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../controllers/liste.php">Matchs</a></li>
            </div>
            <div class="user">
                <?php
                    session_start();
                    if (!isset($_SESSION['loginUser'])){
                    echo '<li><a href="../views/inscription.php">Inscription</a></li>
                        <li><a href="../views/connexion.php">Connexion</a></li>';}
                    else{
                    echo '<li><a href="../views/profil.php">Profil</a></li>
                        <li><a href="../controllers/deconnect.php">Déconnexion</a></li>';}               
                ?>
            </div>
        </ul>
    </nav>