
<?php

require '../includes/connect.php';
$pdo = connect() ;
$idmed = $_GET['idmed'];
$sql = 'SELECT * FROM user WHERE id = :idmed';
$statement = $pdo->prepare($sql);
$statement->bindParam(':idmed', $idmed, PDO::PARAM_INT);
$statement->execute();
$med = $statement->fetch(PDO::FETCH_ASSOC);

 var_dump($_GET);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecin</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/calendar.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>
    <header>
        <?php
        echo "<h1>Le médecin {$med['nom']}  {$med['prenom']}</h1>";
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
    <form action="demande.php" method="POST">
        <?php
    echo"<input type='hidden' name='idmed'  value='{$idmed}'>";
    ?>
    
    <div class='row'>
        <div class="col-1"></div>
        <div class="col-4">
            <div class="mb-3 row">
                <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                <input type='text' name='nom' readonly class='form-control-plaintext' id='staticEmail' value='nom'>
                
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-10">
                <input type="text" name="prenom" readonly class="form-control-plaintext" id="staticEmail" value="prenom">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="num_tel" class="col-sm-2 col-form-label">Numéro téléphone</label>
                <div class="col-sm-10">
                <input type="text" name="num_tel" class="form-control" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" name="email" class="form-control" >
                </div>
            </div>
            <label for="radio" class="col-sm-2 col-form-label">Lieux</label>
            <div class="form-check form-check-inline">
                
                <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="adomicile">
                <label class="form-check-label" for="inlineRadio1">à domicile</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="cabinet">
                <label class="form-check-label" for="inlineRadio2">Cabinet</label>
            </div>
            <div class="mb-3 row">
                <label for="rdv" class="col-sm-2 col-form-label">RDV</label>
                <div class="col-sm-10">
                    <input type="date" id="rdv" name="rdv"  class="form-control">
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-4">
            <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                    <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg">Envoyer Demande</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-1"></div>
    </div>
    </form>
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>

</html>
