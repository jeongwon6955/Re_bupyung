<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="App/views/CSS/style.css">
    <link rel="stylesheet" href="App/views/CSS/login.css">
</head>
<body>
    <form method="POST">
        <section id="visual">
            <img id="backImg" src="App/views/IMG/main.jpg" alt="비주얼 백그라운드 이미지" title="풀숲">
            <div class="login_box" style="height: 490px;">
                <!-- logo -->
                <div class="logo_login">
                    <img src="App/views/IMG/logo.png" alt="">
                </div>

                <!-- 이메일 -->
                <div class="input_box">
                    <input type="text" name="username" id="email" required>
                    <span class="holder">Username</span>
                </div>

                <!-- 비밀번호 -->
                <div class="input_box">
                    <input type="password" name="password" id="pass" required>
                    <span class="holder">Password</span>
                </div>

                <!-- 비밀번호 확인 -->
                <div class="input_box">
                    <input type="password" name="password_ck" id="pass" required>
                    <span class="holder">Password Check</span>
                </div>

                <!-- 로그인 버튼 -->
                <button type="submit" id="login_btn">회원가입</button>

                <!-- 회원가입 버튼 -->
                <p id="register"><a href="index.php?route=user/login">로그인으로 돌아가기</a></p>
            </div>
            <?php if (isset($error)): ?>
                <script>
                    alert("<?php echo addslashes($error); ?>")
                </script>
            <?php endif; ?>
        </section>
    </form>
</body>
</html>