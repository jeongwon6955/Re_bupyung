// json 데이터 불러오기
let jsonData = [];

fetch("../JS/board.json")
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
                <div class="board_a">${item.title}</div>
                <div class="board_left">
                    <span class="writer">${item.writer}</span>
                    <span class="date">${item.date}</span>
                    <span class="like">좋아요 0</span>
                </div>
            `;
            
            listBox.insertBefore(list, listBox.firstChild);
        });
    }
    listCount.textContent = jsonData.length;
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
                boardCall(jsonArr);
            }
        })
        jsonArr = [];
    })
    drawPagination();
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

// 삭제
function deleter() {
    listBox.replaceChildren();
}