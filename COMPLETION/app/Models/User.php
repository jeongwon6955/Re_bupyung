<?php
require_once "core/Database.php";

class User extends Database {

    public function register($username, $password, $password_ck) {
        if ($password !== $password_ck) {
            return false; // 비밀번호가 다르면 등록 실패
        }

        $db = $this->connect();
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        return $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
    }

    public function login($username) {
        $db = $this->connect();
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->fetch();
    }
}
