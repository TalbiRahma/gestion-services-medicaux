<?php

require_once '../includes/connect.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$num_tel = $_POST['num_tel'];
$address = $_POST['address'];
$role = $_POST['role'];

/*echo $nom ."<br>";
echo $prenom ."<br>";
echo $email ."<br>";
echo $password ."<br>";
echo $num_tel ."<br>";
echo $address ."<br>";
echo $role ."<br>";*/

$pdo = connect();
//creation de id unique 
$id = uniqid();
$sql = "INSERT INTO user (id,nom, prenom, email, password, num_tel, address, role) VALUES (:id,:nom, :prenom, :email, :password, :num_tel, :address, :role)";
$statment = $pdo->prepare($sql);
$statment->execute([
    ':id' => $id,
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':email' => $email,
    ':password' => $password,
    ':num_tel' => $num_tel,
    ':address' => $address,
    ':role' => $role,
]);
 


if($role == "patient"){
    
     // Redirection vers la page d'accueil
    header("Location: ../patient/patient.php");
    exit();
}elseif($role == "medecin"){
    
     

     // Redirection vers la page d'accueil
    header("Location: ../prosante/medecin/medecin.php");
    exit();
}elseif($role == "infirmier"){
   
     

     // Redirection vers la page d'accueil
    header("Location: ../prosante/infirmier/infirmier.php");
    exit();
}elseif($role == "pharmacie"){
    
     

     // Redirection vers la page d'accueil
    header("Location: ../prosante/pharmacie/pharmacie.php");
    exit();
}elseif($role == "labo"){
    
     // Redirection vers la page d'accueil
    header("Location: ../prosante/laboratoire/laboratoire.php");
    exit();
}