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