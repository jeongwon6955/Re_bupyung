// 버튼 스크롤 효과
const introBtn = document.querySelector('#intro_btn');
const methodBtn = document.querySelector('#method_btn');
const nephronBtn = document.querySelector('#nephron_btn');
const compenyBtn = document.querySelector('#compeny_btn');

introBtn.addEventListener('click', () => {
    const target = document.querySelector('.intro');

    target.scrollIntoView({
        behavior: 'smooth',
        block: 'end'
    })
})

methodBtn.addEventListener('click', () => {
    const target = document.querySelector('.method');

    target.scrollIntoView({
        behavior: 'smooth',
        block: 'end'
    })
})

nephronBtn.addEventListener('click', () => {
    const target = document.querySelector('.nephron');

    target.scrollIntoView({
        behavior: 'smooth',
        block: 'end'
    })
})

compenyBtn.addEventListener('click', () => {
    const target = document.querySelector('.compeny');

    target.scrollIntoView({
        behavior: 'smooth',
        block: 'end'
    })
})

// 스크롤 효과
const containers = document.querySelectorAll('.container');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
       if (entry.isIntersecting) {
         entry.target.classList.add('show');
       } else {
         // 화면에서 사라지면 다시 숨기고 싶다면 ↓ 이 줄 활성화
         entry.target.classList.remove('show');
       }
  });
}, {
  threshold: 0.2  // 요소가 20% 보일 때 발동
});

containers.forEach(container => observer.observe(container));