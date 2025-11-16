<?php
// app/controller/authcontroller.php (최종 완성)

// UserModel은 index.php에서 이미 로드했으므로 require_once 제거

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel(); 
    }

    // 1. 로그인 폼을 보여주는 메서드
    public function showLogin() {
        if (isset($_SESSION['user_id'])) {
            redirect('/');
        }
        // 💡 수정: __DIR__을 사용해 View 파일 경로 오류 해결
        include __DIR__ . '/../views/PHP/login.php'; 
    }

    // 2. 로그인 요청 처리
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->findByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                include __DIR__ . '/../views/PHP/main_login.php';
            } else {
                $error = "아이디 또는 비밀번호가 올바르지 않습니다.";
                include __DIR__ . '/../views/PHP/login.php';
            }
        } else {
             $this->showLogin();
        }
    }
    
    // 3. 로그아웃 처리 메서드
    public function logout() {
        session_unset();
        session_destroy();
        redirect('/');
    }
    
    // 4. 회원가입 폼을 보여주는 메서드
    public function showRegister() {
        include __DIR__ . '/../views/PHP/register.php';
    }

    // 5. 회원가입 요청 처리
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            
            if (empty($username) || empty($password)) {
                $error = "아이디와 비밀번호를 모두 입력해야 합니다.";
                include __DIR__ . '/../views/PHP/register.php';
                return;
            }

            if ($this->userModel->registerUser($username, $password)) {
                redirect('/login?registered=true'); 
            } else {
                $error = "회원가입에 실패했습니다. 아이디가 이미 사용 중일 수 있습니다.";
                include __DIR__ . '/../views/PHP/register.php';
            }
        } else {
            $this->showRegister();
        }
    }
}
?>