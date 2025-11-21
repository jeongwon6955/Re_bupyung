// json 데이터 불러오기
let jsonData;

fetch("../JS/board.json")
.then(res => res.json())
.then(data => {
    jsonData = data;
    boardCall(jsonData);
    serching(jsonData);
})

const listBox = document.querySelector('.board');
const inputBox = document.querySelector('#serching');
const inputBtn = document.querySelector('.s_listBox > i');
const listCount = document.querySelector('.list_count > span')

let count = 0;

// 게시판 불러오기
function boardCall(jsonData) {
    deleter();
    if (jsonData.length > 0) {
        jsonData.forEach((item, index) => {
            const list = document.createElement('li');
    
            list.innerHTML = `
                <div class="b_num">${index + 1}</div>
                <div class="board_a">${item.title}</div>
                <div class="board_left">
                    <span class="writer">${item.writer}</span>
                    <span class="date">${item.date}</span>
                    <span class="like">좋아요 0</span>
                </div>
            `;
            
            listBox.insertBefore(list, listBox.firstChild);
            count = index + 1;
        });
    }
    listCount.textContent = count;
}

// 검색 엔진

let jsonArr = [];

function serching(jsonData) {
    inputBox.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            jsonData.forEach((item,index) => {
                let Tcheck = item.title;
                if(Tcheck.includes(inputBox.value)) {
                    jsonArr.push(item);
                    boardCall(jsonArr);
                }
            })
            jsonArr = [];
        }
    })
}

// 삭제
function deleter() {
    listBox.replaceChildren();
}