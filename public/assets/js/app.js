const slider = document.querySelector('.slider');
let counter = 1;

setInterval(() => {
    slider.style.transition = 'transform 0.5s ease-in-out';
    slider.style.transform = `translateX(-${counter * 100}%)`;

    counter++;

    if (counter >= 4) {
        counter = 0;
    }
}, 3000);
