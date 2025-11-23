<?php
require_once "App/Models/User.php";

class UserController {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $data = $user->login($_POST['username']);

            if ($data && password_verify($_POST['password'], $data['password'])) {
                session_start();
                $_SESSION['user'] = $data['username'];
                header("Location: index.php?route=user/home");
                exit;
            } else {
                $error = "로그인 실패";
            }
        }
        include "App/views/PHP/LoginView.php";
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $result = $user->register($_POST['username'], $_POST['password'], $_POST['password_ck']);
            if ($result) {
                header("Location: index.php?route=user/login");
                exit;
            } else {
                $error = "비밀번호가 틀렸습니다";
            }
        }
        include "App/views/PHP/RegisterView.php";
    }

    public function home() {
        session_start();
        include "App/views/PHP/main.php";
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?route=user/home");
    }

    public function notice() {
        session_start();
        include "App/views/PHP/notice.php";
    }
}
