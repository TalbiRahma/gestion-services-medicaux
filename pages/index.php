<?php
// Supposons que tu récupères les informations du médecin depuis la base de données ici
$medecin = array(
    'nom' => 'Dr. m',
    'specialite' => 'Médecine générale'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de rendez-vous médicaux</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Inclusion des scripts et styles nécessaires pour le calendrier -->
</head>
<body>
    <header>
        <h1>Gestion de rendez-vous médicaux</h1>
        <nav>
            <ul>
                <li><a href="patient.html">Patients</a></li>
                <li><a href="rendezvous.html">Rendez-vous</a></li>
                <li><a href="profil.html">Profil</a></li>
                <li><a href="connexion.php" class="btn">Se connecter</a></li>
                <li><a href="inscription.php" class="btn">S'inscrire</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Contenu de la page -->
        <section id="patients">
            <!-- Contenu de la section "Patients" -->
        </section>
        <section id="appointments">
            <!-- Contenu de la section "Prendre un rendez-vous" -->
        </section>
        <section id="profile">''
            <!-- Contenu de la section "Profil du médecin" -->
            <h2>Profil du médecin</h2>
            <p>Nom : <?php echo $medecin['nom']; ?></p>
            <p>Spécialité : <?php echo $medecin['specialite']; ?></p>
        </section>
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>

</body>
</html>
