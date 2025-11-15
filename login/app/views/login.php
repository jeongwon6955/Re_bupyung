<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <link rel="stylesheet" href="../app/views/CSS/style.css">
</head>
<body>
    <div class="login-box">
        <!-- <h2>다시 부평</h2> -->
        <img src="../../img/logo.png" alt="다시 부평">
        <form method="POST" action="/Re_bupyung/login/public/login"> 
            <input type="text" name="username" placeholder="아이디" required>
            <input type="password" name="password" placeholder="비밀번호" required>
            <button type="submit">로그인</button>
        </form>
        <?php 
        if (isset($error)) {
            echo "<p class='error'>{$error}</p>";
        }
        if (isset($_GET['registered']) && $_GET['registered'] == 'true') {
            echo "<p style='color: #00A86B;'>✅ 회원가입 성공! 로그인해주세요.</p>";
        }
        ?>
        <button type="button"><p style="margin-top: 15px;"><a href="/Re_bupyung/login/public/register">회원가입</a></p></button>
    </div>
</body>
</html>