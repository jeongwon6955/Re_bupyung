const userBtns = document.querySelectorAll('.user a');

userBtns.forEach( button => {
    button.innerHTML = '<div><span>' + button.textContent.trim().split('').join('</span><span>') + '</span></div>';
    const blocks = button.querySelectorAll('span');
    for ( let i = 0; i < blocks.length; i++ ) {
        const sec = i / 20;
        blocks[i].style.transitionDelay = `${sec}s`;
    }
});

// Initialize Lenis
const lenis = new Lenis({
  autoRaf: true,
});

// Listen for the scroll event and log the event data
lenis.on('scroll', (e) => {
//   console.log(e);
});

const introSec = document.getElementById('intro');
const navBar = document.querySelector('nav');

const setRadius = element => {
    const thisRect = element.getBoundingClientRect();
    let radius = thisRect.top;

    if ( thisRect.top < 0 ) radius = radius - radius;

    element.style.borderTopLeftRadius = `${radius}px`;
    element.style.borderTopRightRadius = `${radius}px`;
}

window.addEventListener('scroll', () => {
    setRadius( introSec );

    const thisRect = introSec.getBoundingClientRect();
    if ( thisRect.top <= 0 ) {
        navBar.classList.add('scrolling_bar');
        setTimeout(() => navBar.classList.add('show_bar'), 100);
    } else {
        setTimeout(() => navBar.classList.remove('scrolling_bar'), 500);
        navBar.classList.remove('show_bar');
    }
});

// 자원순환 실천방법 | 루프 캐러셀
// const carList = document.querySelector('.carousel_list');
// const carItems = carList.querySelectorAll('article');
// const carBtns = document.querySelectorAll('.carousel_btn > button');

// let oneSpace; // 한 칸
// let currentIndex = 0; // 현재 인덱스
// let totalDistance = 0; // 이동 거리
// let transition = .3;

// for ( let i = 0; i < carItems.length; i++ ) {
//     if ( i === 0 || carItems.length - 1 === i ) {
//         for ( let j = 1; j <= 2; j++ ) {
//             const calc = ( i === 0 ) ? j : -j + 2;
//             const addArticle = document.createElement('article');
//             addArticle.className = `carousel_item carousel${i + calc}`;

//             const src = carItems[i + calc -1].querySelector('img').src;
//             addArticle.innerHTML = `<img src="${src}" alt="샘플 이미지">`;
//             carList[( i === 0 ) ? 'appendChild' : 'prepend'](addArticle);
//         }

//         oneSpace = carItems[i].offsetWidth + 20;
//     }
// }

// carBtns.forEach( btn => {
//     btn.addEventListener('click', () => {
//         // 연속 이벤트 방지
//         btn.classList.add('not_event');
//         setTimeout(() => btn.classList.remove('not_event'), transition * 1000 );

//         // 부드럽게 슬라이딩
//         carList.style.transition = `${transition}s`;

//         // 이전 | 다음 버튼 이벤트
//         const direction = btn.classList.contains('carousel_left') ? -1 : 1;
//         totalDistance += oneSpace * direction;
//         currentIndex += direction;

//         // 무한 루프
//         if ( currentIndex === -1 || currentIndex === 5 ) {
//             const isPrev = currentIndex === -1;
//             setTimeout(() => {
//                 currentIndex = ( isPrev ) ? carItems.length - 1 : 0;
//                 totalDistance = ( isPrev ) ? oneSpace * ( carItems.length - 1 ) : 0;
//                 carList.style.transition = '0s';
//                 carList.style.transform =
//                     `translateX(${( isPrev ) ? -totalDistance : totalDistance}px)`;
//             }, transition * 1000 );
//         }

//         carList.style.transform = `translateX(${-totalDistance}px)`;
//         console.log(currentIndex, totalDistance);
//     });
// });