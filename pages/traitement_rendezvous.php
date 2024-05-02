<?php
// Vérifier si les données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $date = $_POST["date"];
    $heure = $_POST["heure"];
    $patient_id = $_POST["patient"]; // Supposons que le champ "patient" contient l'ID du patient sélectionné

    // Traiter les données (par exemple, enregistrer le rendez-vous dans la base de données)
    // Ici, tu devrais écrire le code pour enregistrer les données dans ta base de données

    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: confirmation_rendezvous.php");
    exit;
} else {
    // Si les données n'ont pas été soumises via POST, rediriger vers une page d'erreur
    header("Location: erreur.php");
    exit;
}
?>
