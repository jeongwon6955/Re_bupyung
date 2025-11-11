const introBtn = document.querySelector('#intro_btn');

introBtn.addEventListener('click', () => {
    const target = document.querySelector('.intro');

    target.scrollIntoView({
        behavior: 'smooth',
        block: 'end'
    })
})