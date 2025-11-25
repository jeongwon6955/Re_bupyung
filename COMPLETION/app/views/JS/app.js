// Initialize Lenis
const lenis = new Lenis({
  autoRaf: true,
});

// Listen for the scroll event and log the event data
lenis.on('scroll', (e) => {
  console.log(e);
});

const introSec = document.getElementById('intro');

const setRadius = element => {
    const thisRect = element.getBoundingClientRect();
    let radius = thisRect.top;

    if ( thisRect.top < 0 ) {
        radius = radius - radius;
    }

    element.style.borderTopLeftRadius = `${radius}px`;
    element.style.borderTopRightRadius = `${radius}px`;
}

document.addEventListener('scroll', event => {
    setRadius( introSec );
});

// 친환경 분리배출 가이드 캐러셀
const ecoLeft = document.querySelector('.eco_controll_left');
const ecoRight = document.querySelector('.eco_controll_right');
const ecoSlide = document.querySelector('.eco_slides');

let ecoCount = 0;

ecoLeft.addEventListener('click', () => {
    if(ecoCount <= 0) {
        ecoCount = 3;
    }else {
        ecoCount -= 1;
    }
    slide(ecoCount);
})

ecoRight.addEventListener('click', () => {
    if(ecoCount >= 3) {
        ecoCount = 0;
    }else {
       ecoCount += 1;
    }
    slide(ecoCount);
})

function slide(ecoCount) {
  if(ecoCount === 0) {
        ecoSlide.style.transform = 'translateX(0)';
    }else if(ecoCount === 1) {
        ecoSlide.style.transform = 'translateX(calc(-1200px + 35px))';
    }else if(ecoCount === 2) {
        ecoSlide.style.transform = 'translateX(calc((-1200px + 35px)*2))';
    }else if(ecoCount === 3) {
        ecoSlide.style.transform = 'translateX(calc((-1200px + 35px)*3))';
    }
}
