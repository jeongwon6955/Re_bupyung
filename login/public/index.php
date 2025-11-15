<?php
// public/index.php: 프론트 컨트롤러 (최종 완성)

// 💡 필수: 출력 버퍼링 시작 (Header 전송 오류 방지)
ob_start();

// 세션 시작
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 1. 필요한 모든 클래스 파일 로드 (경로 오류 해결)
// __DIR__을 사용하여 public 폴더를 기준으로 안전하게 로드합니다.
require_once __DIR__ . '/../app/controller/authcontroller.php'; 
require_once __DIR__ . '/../app/model/database.php'; 
require_once __DIR__ . '/../app/model/usermodel.php'; 

// 2. 🚨 베이스 경로 설정 (XAMPP 하위 경로 문제 해결)
// 이 경로가 브라우저 주소창의 public/ 바로 앞까지와 일치해야 합니다.
$base_path = '/Re_bupyung/login/public'; 

// 3. 리다이렉트 헬퍼 함수 정의
function redirect($path) {
    global $base_path; 
    
    // redirect('/login') 호출 시 -> /Re_bupyung/login/public/login URL 생성
    $target_url = $base_path . ($path === '/' ? '' : $path);
    header("Location: " . $target_url);
    exit();
}

// 4. 요청 경로 추출 및 정리
$request = $_SERVER['REQUEST_URI'];
$request_path = $request;

if (strpos($request, $base_path) === 0) {
    $request_path = substr($request, strlen($base_path));
}

$request_path = strtok($request_path, '?'); 
$request_path = '/' . trim($request_path, '/');

if (empty($request_path) || $request_path === '//') {
    $request_path = '/';
}

$controller = new AuthController();

// 5. 라우팅 로직
switch ($request_path) {
    case '/':
        // 메인 페이지 (로그인 상태가 아니면 /login으로 리다이렉트)
        if (isset($_SESSION['user_id'])) {
            echo "<h2>환영합니다, " . htmlspecialchars($_SESSION['username']) . "님!</h2>";
            // 💡 수정: 로그아웃 링크에 $base_path를 포함하여 404 에러 방지
            echo "<p>로그인 성공! <a href='{$base_path}/logout'>로그아웃</a></p>";
        } else {
            // 💡 수정: 논리적 경로 '/login'만 전달
            redirect('/login'); 
        }
        break;
    
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->login();
        } else {
            $controller->showLogin();
        }
        break;

    case '/register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->register();
        } else {
            $controller->showRegister();
        }
        break;
        
    case '/logout':
        $controller->logout();
        break;
        
    default:
        http_response_code(404);
        echo "404 Not Found: " . htmlspecialchars($request_path); 
        break;
}
?>