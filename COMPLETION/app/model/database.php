<?php
// app/model/database.php (최종 완성)

class Database {
    private $host = "localhost";
    private $db_name = "recycling_community"; // 🚨 DB 이름 확인
    private $username = "root";              // 🚨 XAMPP 사용자명 확인
    private $password = "";                  // 🚨 XAMPP 비밀번호 확인
    
    public function getConnection() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $conn->exec("set names utf8"); 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch(PDOException $exception) {
            // 💡 수정: 오류 발생 시 강제로 화면에 출력하여 디버깅
            echo "<h1>데이터베이스 연결 오류 발생!</h1>";
            echo "<p>메시지: " . $exception->getMessage() . "</p>";
            exit();
        }
        return $conn;
    }
}
// 닫는 태그 ?>