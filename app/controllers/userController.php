<?php
require_once __DIR__ . '/../models/UserModel.php';


$userModel = new UserModel();

// Afficher la liste des utilisateurs

// Traiter l'ajout d'un utilisateur
if (isset($_POST['envoyer'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if ($userModel->insertUser($nom, $prenom)) {
        header('Location: ../../../pages/index.php');
    }

}

$get_users = $userModel->getAllUsers();