<?php 
    $base_root = "/Re_bupyung/COMPLETION/app/views";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>다시 부평</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/lenis@1.3.15/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="<?= $base_root ?>/CSS/style.css">
    <link rel="stylesheet" href="<?= $base_root ?>/CSS/intro.css">
    <link rel="stylesheet" href="<?= $base_root ?>/CSS/nephron.css">
    <link rel="stylesheet" href="<?= $base_root ?>/CSS/method.css">
    <link rel="stylesheet" href="<?= $base_root ?>/CSS/compeny.css">
</head>
<body>
    
    <!-- 헤더 영역 -->
    <header>
        <!-- 로고 -->
        <a href="index.php?route=user/home" class="logo">
            <img src="<?= $base_root ?>/IMG/logo.png" alt="로고" title="다시부평">
        </a>

        <!-- 내비게이션 -->
        <nav>
            <ul>
                <li><a href="#intro">소개</a></li>
                <li><a href="#method">실천방법</a></li>
                <li><a href="#nephron">네프론</a></li>
                <li><a href="#company">참여기업</a></li>
                <li><a href="index.php?route=user/notice">게시판</a></li>
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
        <img id="backImg" src="<?= $base_root ?>/IMG/main.jpg" alt="비주얼 백그라운드 이미지" title="풀숲">
        <img id="backContent" src="<?= $base_root ?>/IMG/mainSub.png" alt="비주얼 이미지" title="가운데에 쓰레기통">
        <h1 class="visual_text">다시 시작하는<span> 부평</span></h1>
        <div class="scrTo"></div>
    </section>

    <!-- 다시 부평이란? -->
    <section id="intro" class="sec">
        <div class="s_container">
            <!-- 섹션 제목 -->
            <div class="sec_title">
                <h1>다시 부평이란</h1>
                <h3>다시 부평은 자원도, 환경도, 부평도 다시 살아나는 순환을 뜻합니다.</h3>
            </div>

            <!-- 콘텐츠 -->
            <div class="intro_cont">
                <article class="intro_item">
                    <img src="<?= $base_root ?>/IMG/item.png" alt="소개 이미지">
                    <p class="key">reduce</p>
                    <p class="key_exp">불필요한 것은 줄이고</p>
                </article>
                <article class="intro_item">
                    <img src="<?= $base_root ?>/IMG/item2.png" alt="소개 이미지">
                    <p class="key">reuse</p>
                    <p class="key_exp">한 번 더 사용하고</p>
                </article>
                <article class="intro_item">
                    <img src="<?= $base_root ?>/IMG/item3.png" alt="소개 이미지">
                    <p class="key">recycle</p>
                    <p class="key_exp">올바르게 재활용하고</p>
                </article>
                <article class="intro_item">
                    <img src="<?= $base_root ?>/IMG/item4.png" alt="소개 이미지">
                    <p class="key">recovery</p>
                    <p class="key_exp">에너지 만들고</p>
                </article>
            </div>

            <!-- 자세히 보기 -->
            <button type="button" class="view_more">자세히 알아보기</button>
        </div>
    </section>

    <!-- 자원순환 실천방법 -->
    <section id="method" class="sec">
        <div class="s_container">
            <div class="eco_con_box">
                <div class="eco_con_top">
                    <h1>친환경 분리배출 가이드</h1>
                    <div class="eco_controll">
                        <button type="button" class="eco_controll_left"><i class="fa-solid fa-angle-left"></i></button>
                        <button type="button" class="eco_controll_right"><i class="fa-solid fa-angle-right"></i></button>
                        <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="eco_slides">
                    <!-- 플라스틱 -->
                    <div class="eco_slide">
                        <div class="pagination">
                            <div>
                                <div id="eco_active"></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <span class="page_category">플라스틱</span>
                        </div>
                        <div class="eco_list">
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">페트병</h2>
                                    <p class="eco_exp">페트병은 라벨을 제거 후 내용물을 헹궈 구겨서 배출해 주세요. 이때 투명 페트병만 별도로 분리배출합니다.</p>
                                    <img src="App/views/IMG/plastic.png" alt="plastic">
                                </div>
                                <button type="button" class="eco_more">자세히 알아보기</button>
                            </div>
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">식기류</h2>
                                    <p class="eco_exp">깨끗하게 세척하여 이물질이 없는 경우에만 플라스틱류로 분리 배출하고, 오염이 심하거나 멜라민 식기 등 재활용이 안 되는 경우는 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">옷걸이</h2>
                                    <p class="eco_exp">옷걸이는 재질에 따라 분리하며, 세탁소 철사 옷걸이는 고철류로, 전체 플라스틱 옷걸이는 플라스틱류로 배출합니다. 다만, 나무 옷걸이나 여러 재질이 분리되지 않는 옷걸이는 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">일회용 컵</h2>
                                    <p class="eco_exp">플라스틱 컵은 깨끗하게 헹궈 라벨을 제거한 후 플라스틱류로 배출하며, 종이컵은 깨끗이 헹궈 따로 모아 종이팩으로, 오염이 심하면 모두 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">네프론</h2>
                                    <p class="eco_exp">우리가 플라스틱을 그냥 버릴 수 있겠지만 네프론을 통해서 배출하고 포인트도 쌓을 수있습니다!.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 비닐 -->
                    <div class="eco_slide">
                        <div class="pagination">
                            <div>
                                <div></div>
                                <div id="eco_active"></div>
                                <div></div>
                                <div></div>
                            </div>
                            <span class="page_category">비닐</span>
                        </div>
                        <div class="eco_list">
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">비닐봉투</h2>
                                    <p class="eco_exp">이물질 없이 깨끗한 상태로 만들고 내용물을 비운 후, 바람을 빼고 묶거나 접어서 비닐류로 배출하며, 오염이 심하면 일반 쓰레기로 버립니다.</p>
                                    <img src="App/views/IMG/vinyl.png" alt="vinyl">
                                </div>
                                <button type="button" class="eco_more">자세히 알아보기</button>
                            </div>
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">과자봉지</h2>
                                    <p class="eco_exp">과자 부스러기 없이 내용물을 완전히 비우고 깨끗하게 털어낸 후, 바람을 빼고 접어서 비닐류로 배출하며, 기름이나 양념으로 오염된 경우는 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">지퍼백</h2>
                                    <p class="eco_exp">내용물을 완전히 비우고 깨끗이 헹궈서 이물질을 제거한 후 비닐류로 배출하며, 음식물 등으로 오염되었거나 세척이 불가능하면 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">뽁뽁이(에어캡)</h2>
                                    <p class="eco_exp">테이프나 운송장 스티커를 완전히 제거하고 이물질 없이 깨끗한 상태로 만들어 비닐류로 배출하며, 다른 재질(은박 등)이 섞였거나 오염이 심하면 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">택배 비닐</h2>
                                    <p class="eco_exp">운송장 스티커와 테이프 등 다른 재질을 모두 제거하고 내용물을 비운 후, 깨끗한 비닐만 비닐류로 배출하며, 제거가 불가능하면 일반 쓰레기로 버립니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 캔 -->
                    <div class="eco_slide">
                        <div class="pagination">
                            <div>
                                <div></div>
                                <div></div>
                                <div id="eco_active"></div>
                                <div></div>
                            </div>
                            <span class="page_category">캔</span>
                        </div>
                        <div class="eco_list">
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">음료캔</h2>
                                    <p class="eco_exp">내용물을 완전히 비우고 물로 깨끗이 헹군 후, 찌그러트려 캔류로 배출하며, 담배꽁초 등 이물질이 있다면 일반 쓰레기로 버립니다.</p>
                                    <img src="App/views/IMG/can.png" alt="can">
                                </div>
                                <button type="button" class="eco_more">자세히 알아보기</button>
                            </div>
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">통조림 캔</h2>
                                    <p class="eco_exp">내용물과 기름기를 휴지로 닦아 완전히 비우고 물로 깨끗이 헹군 후, 찌그러트려 캔류로 배출하며, 내용물 잔여물이 심하면 일반 쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">스프레이 캔</h2>
                                    <p class="eco_exp">스프레이캔은 내용물을 완전히 비운 뒤, 구멍을 뚫지 않고 그대로 금속류로 배출해 주세요. 또한 분리 가능한 뚜껑이나 라벨은 따로 분리하여 배출합니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">알루미늄 호일</h2>
                                    <p class="eco_exp">알루미늄 호일은 음식물이나 기름기를 깨끗이 제거한 뒤, 작게 뭉쳐 금속류로 배출해 주세요. 심하게 오염된 호일은 일반쓰레기로 버립니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">고철류</h2>
                                    <p class="eco_exp">고철류는 부착된 이물질을 제거한 뒤, 플라스틱·나무 등 이종 재질을 분리하여 금속류로 배출해 주세요. 분리가 어려운 복합 소재이거나 작은 나사류·못 등은 한데 모아 금속류로 내면 됩니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 종이 -->
                    <div class="eco_slide">
                        <div class="pagination">
                            <div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div id="eco_active"></div>
                            </div>
                            <span class="page_category">종이</span>
                        </div>
                        <div class="eco_list">
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">택배 상자</h2>
                                    <p class="eco_exp">택배 상자는 박스 테이프·송장지·스티로폼 완충재를 모두 제거한 뒤, 접어서 종이류로 배출합니다.</p>
                                    <img src="App/views/IMG/paper.png" alt="paper">
                                </div>
                                <button type="button" class="eco_more">자세히 알아보기</button>
                            </div>
                            <div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">영수증</h2>
                                    <p class="eco_exp">영수증은 감열지 특성으로 인해 재활용이 어려우므로, 일반쓰레기로 배출합니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">우유팩</h2>
                                    <p class="eco_exp">우유팩은 내용물을 깨끗이 비우고, 물로 헹군 뒤 펼쳐서 건조시킨 후, 종이류와 구분되는 ‘팩류’로 배출합니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">음식 포장 용기</h2>
                                    <p class="eco_exp">음식 포장용기는 내용물을 비우고 세척한 뒤, 플라스틱류·종이류 등 재질별로 분리하여 배출합니다. 심하게 오염된 용기는 일반쓰레기로 배출합니다.</p>
                                </div>
                                <div class="eco_item">
                                    <button type="button"><i class="fa-solid fa-arrow-right"></i></button>
                                    <h2 class="eco_name">코팅된 종이</h2>
                                    <p class="eco_exp">코팅된 종이는 내용물을 제거하고 오염을 최소화한 뒤, 종이류와 구분하여 일반쓰레기로 배출합니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 네프론이란 -->
    <section id="nephron" class="sec">
        <div class="s_container">
            <!-- 섹션 제목 -->
            <div class="nep_exp">
                <p>쓰레기가 돈이 되는 세상</p>
                <h1>
                    쓰레기가 돈이 되고<br>
                    재활용이 놀이가 되는<br>
                    세상을 만듭니다.
                </h1>
            </div>
            <div class="nep_con">
                <div class="nep_info">
                    <h2>01</h2>
                    <h1>네프론이란?</h1>
                    <p>
                        네프론은 AI 기술로 작동하는<br>
                        무인 투명페트병 수거함입니다.<br>
                        사용자가 페트병을 넣으면 네프론이 자동으로 분류하고<br>
                        수거하여, 고품질 재활용이 가능하도록 돕는<br>
                        스마트한 자원순환 기기입니다.
                    </p>
                </div>
                <div class="nep_img" id="superbin"><img src="<?= $base_root ?>/IMG/SuperBin Logo_Primary_ENG.png" alt="수퍼빈"></div>
            </div>

            <div class="nep_con">
                <div class="nep_img"><img src="<?= $base_root ?>/IMG/1_home_change_bg.jpg" alt=""></div>
                <div class="nep_info">
                    <h2>02</h2>
                    <h1>순환경제로의<br>전환을 이뤄냅니다.</h1>
                    <p>
                        버려지는 쓰레기를 다시 소재로 활용할 수<br>
                        있도록 선별 수집 시스템 및 물류 인프라를<br>
                        재설계하여 이전에 없던 새로운 방식의<br>
                        순환경제를 구축합니다.
                    </p>
                </div>
            </div>
            <div class="nep_con">
                <div class="nep_info">
                    <h2>03</h2>
                    <h1>생명과의 공존을<br>실천합니다.</h1>
                    <p>
                        깨끗한 지구를 위해 다양한 생명이<br>
                        보장되는 공동체를 만들어갑니다. 공존과<br>
                        균형을 지켜 나가는 것, 미래를 위한 우리<br>
                        세대의 역할입니다.
                    </p>
                </div>
                <div class="nep_img"><img src="<?= $base_root ?>/IMG/1_home_coexist_bg.jpg" alt=""></div>
            </div>

            <button type="button" class="view_more"><a href="https://www.superbin.co.kr/" target="_blank">자세히 알아보기</a></button>
        </div>
    </section>

    <!-- 자연순환 참여기업 -->
    <section id="company" class="sec">
        <div class="s_container">
            <!-- 섹션 제목 -->
            <div class="sec_title">
                <h1>자연순환 참여기업</h1>
                <h3>지자체뿐만 아니라 세계 여러 기업에서도 지구를 위해 노력하고 있습니다.</h3>
            </div>

            <!-- 콘텐츠 -->
            <div class="comp_con">
                <article class="comp_item">
                    <h1>starbucks</h1>
                    <p>텀블러 사용하기</p>
                    <h2>166,437,176</h2>
                </article>
                <article class="comp_item">
                    <h1>자연드림</h1>
                    <p>페트병 생수 절감</p>
                    <h2>269,056,631</h2>
                </article>
                <article class="comp_item">
                    <h1>dunkin'</h1>
                    <p>친환경 포장재 전환</p>
                    <h2>13,548,971</h2>
                </article>
                <article class="comp_item">
                    <h1>배달의 민족</h1>
                    <p>일회용품 덜 쓰기</p>
                    <h2>17,296,352</h2>
                </article>
            </div>

            <button type="button" class="view_more"><a href="https://www.recycling-info.or.kr/act4r/main.do" target="_blank">자세히 알아보기</a></button>
        </div>
    </section>

    <!-- 푸터 영역 -->
    <footer>
        <div id="footer">
            <div class="s_container">
                <a href="<?= $base_root ?>/PHP/main.php" class="logo"><img src="<?= $base_root ?>/IMG/logo_white.png" alt="푸터 로고"></a>

                <!-- 사이트 정보 -->
                <div class="site_info">
                    <p><span>adress</span>인천광역시 부평구 산곡3동 화랑로 111 인평자동차고등학교</p>
                    <p><span>developer</span>최정원</p>
                    <p><span>source</span>자연순환 실천 플랫폼(https://www.recycling-info.or.kr/act4r/main.do)</p>
                    <p><span>IMG source</span><a href="https://www.flaticon.com/kr/free-icons/-" title="플라스틱 병 아이콘">플라스틱 병 아이콘 제작자: juicy_fish - Flaticon</a></p>
                    <p><span>IMG source</span><a href="https://www.flaticon.com/kr/free-icons/-" title="비닐 봉투 아이콘">비닐 봉투 아이콘 제작자: nawicon - Flaticon</a></p>
                    <p><span>IMG source</span><a href="https://www.flaticon.com/kr/free-icons/-" title="제로 낭비 아이콘">제로 낭비 아이콘 제작자: juicy_fish - Flaticon</a></p>
                    <p><span>IMG source</span><a href="https://www.flaticon.com/kr/free-icons/" title="종이 아이콘">종이 아이콘 제작자: Freepik - Flaticon</a></p>
                </div>
            </div>

            <!-- 카피라이트 -->
            <p class="copyright">Copyright&copy;2025 Designed by Jeongwon Choi. All right reserved</p>
        </div>
    </footer>

    <script src="<?= $base_root ?>/JS/app.js"></script>
</body>
</html>