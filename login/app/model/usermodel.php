<?php
// app/model/usermodel.php (최종 완성)

// Database 클래스는 index.php에서 이미 로드했으므로 require_once 제거

class UserModel {
    private $conn;
    private $table_name = "users";

    public function __construct() {
        $database = new Database(); 
        $this->conn = $database->getConnection();
    }

    public function findByUsername($username) {
        $query = "SELECT id, username, password FROM " . $this->table_name . " WHERE username = :username LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? $row : null;
    }

    public function registerUser($username, $password) {
        if ($this->findByUsername($username)) {
            return false; 
        }
        
        $query = "INSERT INTO " . $this->table_name . " (username, password) VALUES (:username, :password)";
        
        $stmt = $this->conn->prepare($query);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);

        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
// 닫는 태그 ?>