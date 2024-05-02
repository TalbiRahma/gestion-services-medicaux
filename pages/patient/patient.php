<?php
    session_start();
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <?php
        echo '<h1>Bienvenue '.$_SESSION['nom'].' '.$_SESSION['prenom'].'</h1>';
        ?>
        <nav>
            <ul>
                <li><a href="medecin.php">Médecin</a></li>
                <li><a href="infirmier.php">Infirmier</a></li>
                <li><a href="Pharmacie.php">Pharmacie</a></li>
                <li><a href="Labo.php">Laboratoire Médicale</a></li>
                <li><a href="rendezvous.html">Rendez-vous</a></li>
                <li><a href="profil.html">Profil</a></li>
               <!-- <li><a href="connexion.php" class="btn">Se connecter</a></li>
                <li><a href="inscription.php" class="btn">S'inscrire</a></li>-->
            </ul>
        </nav>
    </header>
    <main>
        
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>
</html>
