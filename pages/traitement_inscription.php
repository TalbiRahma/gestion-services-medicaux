<?php
// Vérifier si les données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Traiter les données (par exemple, enregistrer l'utilisateur dans la base de données)
    // Ici, tu devrais écrire le code pour enregistrer les données dans ta base de données

    // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
    header("Location: confirmation_inscription.php");
    exit;
} else {
    // Si les données n'ont pas été soumises via POST, rediriger vers une page d'erreur
    header("Location: erreur.php");
    exit;
}
?>
