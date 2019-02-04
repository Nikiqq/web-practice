let sliderImages = document.querySelectorAll('.slider__item'),
    arrowLeft = document.querySelector('.arrow-left'),
    arrowRight = document.querySelector('.arrow-right'),
    current = 0;

function reset() {
    for(let i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = 'none';
    }
}

function startSlide() {
    reset();
    changeArrowColor();
    sliderImages[0].style.display = 'block';
}

function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = 'block';
    current--;
    changeArrowColor();
}

function slideRight() {
    reset();
    sliderImages[current + 1].style.display = 'block';
    current++;
    changeArrowColor();
}

function changeArrowColor() {
    if(current === 0) {
        arrowLeft.classList.add('arrow-left_color_white');
        arrowRight.classList.add('arrow-right_color_white');
    }
    else {
        arrowLeft.classList.remove('arrow-left_color_white');
        arrowRight.classList.remove('arrow-right_color_white');
    }
}

arrowLeft.addEventListener('click', function() {
    if(current === 0) {
        current = sliderImages.length;
    }
    slideLeft();
})

arrowRight.addEventListener('click', function() {
    if(current === sliderImages.length - 1) {
        current = -1;
    }
    slideRight();
})

startSlide();