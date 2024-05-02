<?php
// Vérifier si les données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs email et mot_de_passe sont définis dans les données POST
    if (isset($_POST["email"]) && isset($_POST["mot_de_passe"])) {
        // Récupérer les données du formulaire
        $email = $_POST["email"];
        $mot_de_passe = $_POST["mot_de_passe"];

        // Connexion à la base de données (à remplacer avec tes propres informations de connexion)
        $servername = "localhost";
        $username = "eya";
        $password = "eya";
        $dbname = "gestion";

        // Créer une connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Préparer la requête SQL pour vérifier l'utilisateur
        $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$mot_de_passe'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // L'utilisateur existe dans la base de données et le mot de passe est correct
            // Tu peux rediriger l'utilisateur vers une page de succès ou une autre page appropriée
            header("Location: accueil.php");
            exit;
        } else {
            // L'utilisateur n'existe pas dans la base de données ou le mot de passe est incorrect
            // Tu peux rediriger l'utilisateur vers une page d'erreur de connexion
            header("Location: erreur_connexion.php");
            exit;
        }

        // Fermer la connexion à la base de données
        $conn->close();
    } else {
        // Si les champs email et mot_de_passe ne sont pas définis dans les données POST, rediriger vers une page d'erreur
        header("Location: erreur.php");
        exit;
    }
} else {
    // Si les données n'ont pas été soumises via POST, rediriger vers une page d'erreur
    header("Location: erreur.php");
    exit;
}
?>
