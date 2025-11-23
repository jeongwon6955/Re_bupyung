<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="App/views/CSS/style.css">
    <link rel="stylesheet" href="App/views/CSS/notice.css">
</head>
<body>
    <!-- 헤더 영역 -->
    <header>
        <!-- 로고 -->
        <a href="index.php?route=user/home" class="logo">
            <img src="App/views/IMG/logo.png" alt="로고" title="다시부평">
        </a>

        <!-- 내비게이션 -->
        <nav>
            <ul>
                <li><a href="#notice">게시판</a></li>
            </ul>
        </nav>

        <!-- 로그인 / 회원가입 -->
        <?php if (isset($_SESSION['user'])): ?>
            <div class="user">
                <ul class="user_info">
                    <i class="fa-solid fa-user"></i><?php echo htmlspecialchars($_SESSION['user']); ?>
                    <ul class="user_submenu">
                        <li><a href="#">내정보</a></li>
                        <li><a href="#">설정</a></li>
                    </ul>
                </ul>
                <div class="logout">
                    <button type="button">
                        <a href="index.php?route=user/logout">로그아웃</a>
                        <a href="index.php?route=user/logout">로그아웃</a>
                    </button>
                </div>
            </div>
        <?php else: ?>
            <div class="user">
                <div class="sign_in"><button type="button">
                    <a href="index.php?route=user/login">로그인</a>
                    <a href="index.php?route=user/login">로그인</a>
                </button></div>
                <div class="sign_up"><button type="button">
                    <a href="index.php?route=user/register">회원가입</a>
                    <a href="index.php?route=user/register">회원가입</a>
                </button></div>
            </div>
        <?php endif; ?>
    </header>

    <!-- 비주얼 영역 -->
    <section id="visual">
        <img id="backImg" src="App/views/IMG/main.jpg" alt="비주얼 백그라운드 이미지" title="풀숲">
        <img id="backContent" src="App/views/IMG/mainSub.png" alt="비주얼 이미지" title="가운데에 쓰레기통">
        <h1 class="visual_text">다시 시작하는<span> 부평</span></h1>
        <div class="scrTo"></div>
    </section>

    <!-- 게시판 -->
    <section id="notice">
        <div class="s_container">
            <!-- 섹션 제목 -->
            <div class="sec_title">
                <h1>다시 부평 게시판</h1>
                <h3>자연순환의 노하우를 게시판에 담아보세요!<h3>
            </div>
            <div class="n_box">
                <div class="serching">
                    <span class="list_count">총 <span></span>건</span>
                    <div class="s_listBox">
                        <input type="text" name="serching" placeholder="검색어를 입력하세요" id="serching" autocomplete="off">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="board">
                    <!-- 자바스크립트로 생성 -->
                    <!-- 게시판 아이템 -->
                </div>
                <div class="page_btnBox">
                    <div class="p_next"><</div>
                    <div class="p_num"></div>
                    <div class="p_prev">></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 푸터 영역 -->
    <footer>
        <div id="footer">
            <div class="s_container">
                <a href="index.html" class="logo"><img src="App/views/IMG/logo_white.png" alt="푸터 로고"></a>

                <!-- 사이트 정보 -->
                <div class="site_info">
                    <p><span>adress</span>인천광역시 부평구 산곡3동 화랑로 111 인평자동차고등학교</p>
                    <p><span>developer</span>최정원</p>
                    <p><span>source</span>자연순환 실천 플랫폼(https://www.recycling-info.or.kr/act4r/main.do)</p>
                </div>
            </div>

            <!-- 카피라이트 -->
            <p class="copyright">Copyright&copy;2025 Designed by Jeongwon Choi. All right reserved</p>
        </div>
    </footer>
    <script src="App/views/JS/notice.js"></script>
</body>
</html>