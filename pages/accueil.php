<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur la page d'accueil</h1>
        <?php 
            var_dump($_POST);
        ?>
        <nav>
            <ul>
                <li><a href="patient.html">Patients</a></li>
                <li><a href="rendezvous.html">Rendez-vous</a></li>
                <li><a href="profil.html">Profil</a></li>
                <!--<li><a href="connexion.php" class="btn">Se connecter</a></li>
                <li><a href="inscription.php" class="btn">S'inscrire</a></li>-->
            </ul>
        </nav>
    </header>
    <main>
        <p>Bienvenue sur notre site.</p>
        <!-- Ajoute d'autres éléments de contenu si nécessaire' -->
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>
</html>
