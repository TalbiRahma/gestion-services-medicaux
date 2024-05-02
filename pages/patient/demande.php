<?php

require_once '../includes/connect.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$num_tel = $_POST['num_tel'];
$email = $_POST['email'];

$type = $_POST['type'];
$rdv = $_POST['rdv'];
$description = $_POST['description'];

$idmed = $_POST['idmed'];

var_dump($_POST);

/*$pdo = connect();
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
]);*/