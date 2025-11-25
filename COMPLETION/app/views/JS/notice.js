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
                <div class="board_a"><a href="#notice" data-id="${item.id}">${item.title}</a></div>
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
                    <p>${item.intro}</p>
                    <p>${item.body}</p>
                    <p>${item.conclusion}</p>
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
