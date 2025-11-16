<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/views/CSS/style.css">
    <link rel="stylesheet" href="../app/views/CSS/intro.css">
    <link rel="stylesheet" href="../app/views/CSS/method.css">
    <link rel="stylesheet" href="../app/views/CSS/nephron.css">
    <link rel="stylesheet" href="../app/views/CSS/compeny.css">
    <title>다시부평</title>
    <script src="https://kit.fontawesome.com/2ff1512d45.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="visual">
        <!-- 헤더 영역 -->
        <header>
            <!-- 로고-->
            <div class="logo">
               <a href="<?= $base_path ?>/"><img src="../app/views/img/logo.png" alt=""></a>
            </div>

            <!-- 로그인 영역 -->
            <div class="user">
                <div class="user_box">
                    <div class="user_label">
                        <button type="button" class="sign-inB"><a href="<?= $base_path ?>/login">로그인</a></button>
                        <button type="button" class="sign-inT"><a href="<?= $base_path ?>/login">로그인</a></button>
                    </div>
                </div>
                <div class="user_box">
                    <div class="user_label">
                        <button type="button" class="sign-upB"><a href="<?= $base_path ?>/register">회원가입</a></button>
                        <button type="button" class="sign-upT"><a href="<?= $base_path ?>/register">회원가입</a></button>
                    </div>
                </div>
            </div>

        </header>

        <div class="v_content">
            <!-- 메인 이미지 -->
            <img src="../app/views/img/mainSub.png" alt="" class="mainSub_img">
     
            <!-- 메인 텍스트 -->
            <h1 class="main_text">다시 시작하는<span> 부평</span></h1>
        </div>

        <!-- 사이드 메뉴 -->
        <div class="side_menu">
            <div class="s_list" id="intro_btn"><img src="../app/views/img/icon.png" alt=""> <span class="s_text">다시 부평이란?</span></div>
            <div class="s_list" id="method_btn"><img src="../app/views/img/icon1.png" alt=""> <span class="s_text">자연순환 <br> 실천방법</span></div>
            <div class="s_list" id="nephron_btn"><img src="../app/views/img/icon2.png" alt=""> <span class="s_text">네프론이란?</span></div>
            <div class="s_list" id="compeny_btn"><img src="../app/views/img/icon3.png" alt=""> <span class="s_text">자연순환 <br> 참여 기업</span></div>
        </div>
    </section>

    <!-- 다시 부평이란? -->
    <section class="intro">
        <div class="i_container container">
            <h1>다시 부평이란?</h1>
            <h2>다시 부평은 자원도, 환경도, 부평도 다시 살아나는 순환을 뜻합니다.</h2>
            <div class="i_content">
                <div class="i_item">
                    <img src="../app/views/img/item.png" alt="">
                    <p class="key">Reduce</p>
                    <p class="key_cont">불필요한것은 줄이고</p>
                </div>
                <div class="i_item">
                    <img src="../app/views/img/item2.png" alt="">
                    <p class="key">reuse</p>
                    <p class="key_cont">한 번 더 사용하고</p>
                </div>
                <div class="i_item">
                    <img src="../app/views/img/item3.png" alt="">
                    <p class="key">recycle</p>
                    <p class="key_cont">올바르게 재활용 하고</p>
                </div>
                <div class="i_item">
                    <img src="../app/views/img/item4.png" alt="">
                    <p class="key">recovery</p>
                    <p class="key_cont">에너지 만들고</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 자원순환 실천방법 -->
    <section class="method">
        <div class="m_container container">
            <h1>자원순환 <span>실천방법</span></h1>
            <h2>분리수거</h2>
            <div class="m_content">
                <div class="m_item">
                    <a href="#">
                        <div class="m_img"><img src="../../img/icon.png" alt=""></div>
                        <p>플라스틱</p>
                    </a>
                </div>
                <div class="m_item">
                    <a href="#">
                        <div class="m_img"><img src="../../img/icon1.png" alt=""></div>
                        <p>비닐</p>
                    </a>
                </div>
                <div class="m_item">
                    <a href="#">
                        <div class="m_img"><img src="../../img/icon2.png" alt=""></div>
                        <p>캔</p>
                    </a>
                </div>
                <div class="m_item">
                    <a href="#">
                        <div class="m_img"><img src="../../img/icon3.png" alt=""></div>
                        <p>종이</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 네프론 이란? -->
    <section class="nephron">
        <div class="n_container container">
            <div class="n_imgBox">
                <img src="../app/views/img/SuperBin Logo_Primary_ENG.png" alt="">
                <a href="https://www.superbin.co.kr/#" target="_blank">
                    <button type="button" class="n_more">자세히 알아보기</button>
                </a>
            </div>
            <div class="n_textBox">
                <h1>네프론이란?</h1>
                <p>네프론은 AI 기술로 작동하는 무인 투명페트병 수거함입니다. <br> 
                   사용자가 페트병을 넣으면 네프론이 자동으로 분류하고 수거하여, <br>
                   고품질 재활용이 가능하도록 돕는 스마트한 자원순환 기기입니다.</p>
            </div>
        </div>
    </section>

    <!-- 자연순환 참여 기업 -->
    <section class="compeny">
        <div class="c_container container">
            <h1>자연순환 참여 기업</h1>
            <div class="c_content">
                <div class="c_item">
                    <span>starbucks</span>
                    <div class="c_num">
                        <p>텀블러 사용하기</p>
                        <p>166,437,176</p>
                    </div>
                </div>
                <div class="c_item">
                    <span>자연드림</span>
                    <div class="c_num">
                        <p>페트병 생수 절감</p>
                        <p>269,056,631</p>
                    </div>
                </div>
                <div class="c_item">
                    <span>dunkin'</span>
                    <div class="c_num">
                        <p>친환경포장재 전환</p>
                        <p>13,548,971</p>
                    </div>
                </div>
                <div class="c_item">
                    <span>배달<span class="l_logo">의</span> 민족</span>
                    <div class="c_num">
                        <p>일회용품 덜쓰기</p>
                        <p>17,296,352</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 푸터 -->
    <footer>
        <div class="footer">
            <div class="f_top">
                <img src="../app/views/img/logo_white.png" alt="">
                <p>인천광역시 부평구 산곡동 화랑로 111 <br>
                   인평자동차 고등학교
                </p>
            </div>
            <div class="f_bottom">
                <p>Copyright&copy2025 Jeongwon choi. All right reserved</p>
                <p>출처: 자연순환 실천 플랫폼(https://www.recycling-info.or.kr/act4r/main.do)</p>
            </div>
        </div>
    </footer>

    <!-- app.js -->
    <script src="../app/views/JS/app.js"></script>
</body>
</html>