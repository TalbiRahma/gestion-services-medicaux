
<?php

require '../includes/connect.php';
$pdo = connect() ;
$sql = 'SELECT * FROM user WHERE role= "laboratoire"';
$statement = $pdo->query($sql);
// get all publishers
$pharmacies = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pharmacies</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>
    <header>
        
        <h1>Bienvenue flen fouleny</h1>
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
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Numéro téléphone</th>
      <th scope="col">email</th>
      <th scope="col">Demande Service</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if ($pharmacies) {
        foreach ($pharmacies as $phar) {
    echo "<tr>
      <th scope='row'>1</th>
      <td>image</td>
      <td>{$phar['nom']}</td>
      <td>{$phar['prenom']}</td>
      <td>{$phar['address']}</td>
      <td>{$phar['num_tel']}</td>
      <td>{$phar['email']}/td>
      <td>action</td>
      
    </tr>";
}
}
    ?>
    
  </tbody>
</table>
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>
</html>
