<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="patient.html">Patients</a></li>
            <li><a href="rendezvous.html">Rendez-vous</a></li>
            <li><a href="profil.html">Profil</a></li>
        </ul>
    </nav>
    <header>
        <h1>Inscription</h1>
    </header>
    <main>
        <form action="inscription.php" method="POST">
            <label for="nom">Nom d'utilisateur :</label>
            <input type="text" id="nom" name="nom" required><br>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br>

            <label for="confirm_password">Confirmer le mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br>

            <label for="num_tel">Numéro de téléphone :</label>
            <input type="text" id="num_tel" name="num_tel" required><br>
            <label for="address">Adresse :</label>
            <input type="text" id="address" name="address" required><br>

            <label for="role">Choisir votre role:</label>

            <select name="role" id="pet-select">
            <option value="">--aucun--</option>
            <option value="patient">Patient</option>
            <option value="medecin">Medécin</option>
            <option value="infirmier">Infirmier</option>
            <option value="pharmacie">Pharmacie</option>
            <option value="labo">Laboratoire Medicale</option>
            
            </select>



            <!-- Le lien de connexion est dans connexion.php -->
            <p>Déjà inscrit ? <a href="connexion.php">Se connecter ici</a></p>

            <!-- Bouton pour s'inscrire -->
            <button type="submit">S'inscrire</button>
        </form>
    </main>
    <footer>
        <?php 
            var_dump($_POST);
        ?>
    </footer>
</body>
<?php


/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données (remplacez ces valeurs par les vôtres)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "servicemedical";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $num_tel = $_POST['num_tel'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Insertion des données dans la base de données
    $sql = "INSERT INTO patient (nom, prenom, email, password, num_tel, address, role) VALUES ('$nom', '$prenom', '$email', '$password', '$num_tel', '$address', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel utilisateur ajouté avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
/*require('includes/config.php');
function connect()
{
require ('includes/config.php');
try {
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn = new PDO($dsn, $user, $password, $options);
echo "Connected to the $db database successfully!";
return $conn ;
}
catch (PDOException $e) {
echo $e->getMessage();
die("Fin du programme..." );
}
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Afficher les données reçues
    $data=$_POST;
    AddUser($data);
}

/*if(!empty($_POST)){
    /*foreach ($_POST as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    $data=$_POST;
    AddUser($data);
}*/

 /*function AddUser($data) {
    $conn = connect();

    if ($_POST['role'] == "Patient") {
        $requette = "INSERT INTO Patient(nom,prenom,email,password,address,num_tel,role)
        VALUES('" . $data["nom"] . "','" . $data["prenom"] . "','" . $data["email"] . "','" . $data["password"] . "','" . $data["address"] . "','" . $data["num_tel"] . "','" . $data["role"] . "')";

        $resultat = $conn->exec($requette);
        if ($resultat) {
            return "{$data['nom']} {$data['prenom']}, {$data['email']}, {$data['password']}, {$data['address']}, {$data['num_tel']}, {$data['role']}";

        } else {
            return "failed!";
        }
    }
}*/
// Vérifier si les données ont été soumises via la méthode POST
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs nom, prenom, email et mot_de_passe sont définis dans les données POST
    if (isset($_POST["username"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {
        // Récupérer les données du formulaire
        $username = $_POST["username"];
        $prenom = $_POST["prenom"]; // Nouveau champ pour le prénom
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Vérifier si les mots de passe correspondent
        if ($password === $confirm_password) {
            // Hasher le mot de passe
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Connexion à la base de données
            $servername = "localhost";
            $db_username = "eya"; // Changer le nom d'utilisateur de la base de données pour éviter les conflits avec la variable $username
            $db_password = "eya"; // Changer le mot de passe de la base de données
            $dbname = "gestion";

            // Créer une connexion
            $conn = new mysqli($servername, $db_username, $db_password, $dbname);

            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Préparer la requête SQL pour insérer un nouvel utilisateur
            $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Vérifier si la préparation de la requête a réussi
            if ($stmt) {
                // Binder les paramètres et exécuter la requête
                $stmt->bind_param("ssss", $username, $prenom, $email, $hashed_password); // Ajouter $prenom à la liste des paramètres
                $stmt->execute();
                // Rediriger vers une page de succès ou une autre page appropriée
                header("Location: inscription_succes.php");
                exit;
            } else {
                // En cas d'échec de la préparation de la requête
                echo "Erreur de préparation de la requête.";
            }

            // Fermer la connexion
            $conn->close();
        } else {
            // Si les mots de passe ne correspondent pas
            header("Location: erreur_password.php");
            exit;
        }
    } else {
        // Si les champs nom, prenom, email, mot_de_passe et confirm_password ne sont pas définis dans les données POST
        header("Location: erreur.php");
        exit;
    }
} else {
    // Si les données n'ont pas été soumises via POST
    header("Location: erreur.php");
    exit;
}*/
?>


</html>