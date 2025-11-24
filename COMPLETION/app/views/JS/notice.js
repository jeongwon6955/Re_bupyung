// json 데이터 불러오기
let jsonData = [];

fetch("App/views/JS/board.json")
.then(res => res.json())
.then(data => {
    jsonData = data;
    showPage(1, jsonData);
    serching(jsonData);
})

const listBox = document.querySelector('.board');
const inputBox = document.querySelector('#serching');
const inputBtn = document.querySelector('.s_listBox > i');
const listCount = document.querySelector('.list_count > span')
const pageNum = document.querySelector('.p_num');

let likes = 0;

// 게시판 불러오기
function showPage(page, jsonArr) {
    currentPage = page;

    // 뒤에서부터 슬라이스
    let start = jsonArr.length - page * 10;
    let end = start + 10;

    // 음수 처리
    start = Math.max(start, 0);
    end = Math.min(end, jsonArr.length);

    const pageData = jsonArr.slice(start, end); // 뒤에서 앞으로 표시


    deleter();
    if (pageData.length > 0) {
        pageData.forEach((item, index) => {
            const list = document.createElement('li');

            const totalNum = start + index + 1;

    
            list.innerHTML = `
                <div class="b_num">${totalNum}</div>
                <div class="board_a"><a href="#" data-id="${item.id}">${item.title}</a></div>
                <div class="board_left">
                    <span class="writer">${item.writer}</span>
                    <span class="date">${item.date}</span>
                    <span class="like">좋아요 ${likes}</span>
                </div>
            `;
            
            listBox.insertBefore(list, listBox.firstChild);

            const newLink = list.querySelector(`a[data-id="${item.id}"]`);

            newLink.addEventListener('click', (event) => {
                let listID = event.currentTarget.dataset.id;
                DataCall(listID, pageData);
            })
        });
    }
    listCount.textContent = jsonArr.length; 
    drawPagination(jsonArr);
}

// 검색 엔진
let jsonArr = [];

function serching(jsonData) {
    // enter
    inputBox.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            jsonData.forEach((item) => {
                let Tcheck = item.title;
                if(Tcheck.includes(inputBox.value)) {
                    jsonArr.push(item);
                    showPage(1,jsonArr)
                }
            })
            jsonArr = [];
        }
    })
    // 돋보기 클릭
    inputBtn.addEventListener('click', () => {
        jsonData.forEach((item) => {
            let Tcheck = item.title;
            if(Tcheck.includes(inputBox.value)) {
                jsonArr.push(item);
                showPage(1,jsonArr);
            }
        })
        jsonArr = [];
    })
    drawPagination(jsonArr);
}

// 페이징 기능
function drawPagination(jsonArr) {
    const totalPages = Math.ceil(jsonArr.length / 10); // 버튼 수 계산 (핵심!)

    pageNum.innerHTML = ""; // 초기화

    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("div");
        btn.textContent = i;

        btn.addEventListener("click", () => showPage(i, jsonArr));
        if (i === currentPage) {btn.style.fontWeight = 'bold';}
        pageNum.appendChild(btn);
    }
}

const listTitle = document.querySelector('.n_title > h1');
const Scontainer = document.querySelector('.s_container');

// 게시판 내용 데이터 불러오기
function DataCall(listID, jsonData) {
    Scontainer.replaceChildren();
    jsonData.forEach((item) => {
        if (parseInt(listID) === item.id) {
            likes = 0
            Scontainer.innerHTML = 
                `<div class="n_contentBox">
                    <div class="n_title"><h1>${item.title}</h1></div>
                    <div class="n_info">
                        <div class="w"><span>작성자</span> ${item.writer}</div>
                        <div class="d"><span>작성일자</span>${item.date}</div>
                        <div class="h"><span>좋아요</span> ${likes}</div>
                    </div>
                    <div class="n_content">
                        플라스틱은 우리 일상에 필수적이지만, 올바르게 분리배출하지 않으면 재활용이 불가능해져 환경에 큰 부담을 줍니다. 지속 가능한 재활용을 위해 모든 플라스틱 용기는 아래의 4가지 핵심 수칙을 반드시 지켜 배출해야 합니다. <br>
            
                        🌟 4가지 핵심 수칙: 비우고, 헹구고, 분리하고, 섞지 않는다 <br>
                        내용물 비우기 (비운다): 용기 안의 음료, 음식물, 세제 등 내용물을 남김없이 완전히 비워야 합니다. <br>
                        
                        깨끗하게 헹구기 (헹군다): 물이나 세제를 이용해 이물질이나 냄새가 남지 않도록 깨끗하게 헹궈주세요. ※ 이물질 제거가 어렵거나 오염이 심한 경우 재활용이 불가능하므로 종량제 봉투에 버려야 합니다.  <br>
                        
                        다른 재질 분리 (분리한다): 용기에 부착된 라벨, 스티커, 비닐, 뚜껑(다른 재질) 등은 깨끗하게 제거하여 재질별로 분리(일반 쓰레기 또는 비닐류 등)합니다. <br>
                        
                        부피 줄여 배출 (섞지 않는다): 가능한 한 플라스틱을 압착하여 부피를 최소화한 후, 다른 재질과 섞지 않고 플라스틱 전용 수거함에 배출합니다. 특히, 투명 페트병은 별도 수거함에 분리하여 배출해야 고품질 재활용이 가능합니다. <br>
                    </div>
                    <div class="n_bottom">
                        <button type="button"><a href="index.php?route=user/notice">목록 <i class="fa-solid fa-arrow-right"></i></a></button>
                        <i class="fa-regular fa-heart" id="like" data-post-id${item.id}></i>
                    </div>
                 </div>
                `;
            // .fa-regular와 .fa-heart 클래스를 모두 가진 <i> 태그를 선택
            const likeBtn = Scontainer.querySelector(`i#like[data-post-id${item.id}]`);

            likeBtn.addEventListener('click', (e) => {
                const clickedIcon = e.currentTarget;

                clickedIcon.classList.toggle('fa-solid');
                likes += 1
                console.log(likes)
            })
        }
    })
}

// 삭제
function deleter() {
    listBox.replaceChildren();
}
