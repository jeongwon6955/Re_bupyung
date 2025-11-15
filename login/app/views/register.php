<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="../app/views/CSS/style.css">
    </head>
<body>
    <div class="login-box">
        <!-- <h2>회원가입</h2> -->
        <img src="../../img/logo.png" alt="다시 부평">
        <form method="POST" action="/Re_bupyung/login/public/register"> 
            <input type="text" name="username" placeholder="아이디 (영문/숫자)" required>
            <input type="password" name="password" placeholder="비밀번호" required>
            <button type="submit">회원가입</button>
        </form>
        <?php 
        // AuthController에서 회원가입 실패 시 $error 변수가 설정됩니다.
        if (isset($error)) {
            echo "<p class='error'>{$error}</p>";
        }
        ?>
        <button type='button'><p style="margin-top: 15px;"><a href="/Re_bupyung/login/public/login">로그인으로 돌아가기</a></p></button>
    </div>
</body>
</html>