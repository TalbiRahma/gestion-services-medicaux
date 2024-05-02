<?php
    require('../includes/connect.php');
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/connexion.css">
</head>

<body>
    <header>
        <h1>Connexion</h1>
    </header>
    <nav>
        <ul>
            <li><a href="patient.html">Patients</a></li>
            <li><a href="rendezvous.html">Rendez-vous</a></li>
            <li><a href="profil.html">Profil</a></li>
            <?php
            // Afficher les liens en fonction de l'état de connexion de l'utilisateur
            if (isset($_SESSION["connected"]) && $_SESSION["connected"] === true) {
                echo '<li><a href="deconnexion.php" class="btn">Se déconnecter</a></li>';
            } else {
                echo '<li><a href="connexion.php" class="btn">Se connecter</a></li>';
                echo '<li><a href="inscription.php" class="btn">S\'inscrire</a></li>';
            }
            ?>
        </ul>
    </nav>
    <main>
        <form action="connexion.php" method="post">
            <!-- Champs de formulaire pour l'email et le mot de passe -->
            Email<input type="email" name="email" required>
            Mot de passe<input type="password" name="password" required>
            <!-- Bouton de soumission -->
            <button type="submit">Se connecter</button>
        </form>
        <p>Pas encore inscrit ? <a href="inscription.php">S'inscrire ici</a></p>
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>

</html>