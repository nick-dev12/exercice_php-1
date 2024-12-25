<?php
require_once __DIR__ . '../../../config/database.php';

class UserModel
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Insérer un utilisateur
    public function insertUser($nom, $prenom)
    {
        $query = "INSERT INTO users (nom, prenom) VALUES (:nom, :prenom)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        return $stmt->execute();
    }

    // Récupérer tous les utilisateurs
    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
