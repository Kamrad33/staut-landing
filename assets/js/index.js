const mainImageSlider = document.getElementById('main-image-slider');
const bodyContaner = document.querySelector('body');
const MAIN_WRAPPER_WIDTH = document.querySelector('.wrapper-main').offsetWidth;

// эвенты на слайдеры картинок
const imageSliderDraggableAddEvent = (slider) => {
    const button = slider.querySelector('.image-slider__button');
    const slideImage = slider.querySelector('.image-slider__img_front');


    slider.style.height = ((slider.offsetWidth * 3) / 4) + 'px';

    let isDrag = false;
    let limitLeft = 30;
    let limitRight = 30;
    const bodyExtraWidth = (bodyContaner.offsetWidth - MAIN_WRAPPER_WIDTH) / 2;

    console.log(slider.offsetWidth);

    const imageSliderStartDrag = (e) => {
        console.log('startDrag');
        isDrag = true;
        // console.log(bodyContaner);
        bodyContaner.classList.add('noselect');
    };
    
    const imageSliderMoveDrag = (e) => {
        if (!isDrag) {
            return
        }

        let clientX = e.clientX;
        // console.log(clientX * 100 / bodyContaner.offsetWidth);
        // console.log(bodyContaner.offsetWidth - MAIN_WRAPPER_WIDTH);
        
        if (!e.clientX) {
            clientX = e.touches[0].clientX;
        }

        console.log(clientX);

        if (clientX - 17 - bodyExtraWidth > slider.offsetWidth - limitLeft
            || clientX - 17 - bodyExtraWidth < limitRight 
        ) {
            console.log('da');
            return;
        }

        console.log(e);
        slideImage.style.width = clientX - 17 - bodyExtraWidth + 'px';
        button.style.left = clientX - 17 - bodyExtraWidth + 'px';
        
        // console.log('moveDrag');
    };
    
    const imageSliderEndDrag = (e) => {
        bodyContaner.classList.remove('noselect');

        if (!isDrag) {
            return;
        }

        isDrag = false;
        console.log('endDrag');
    };

    (() => {
        button.addEventListener('mousedown', imageSliderStartDrag);
        button.addEventListener('touchstart', imageSliderStartDrag);
    
        button.addEventListener('mousemove', imageSliderMoveDrag);
        button.addEventListener('touchmove', imageSliderMoveDrag);
    
        button.addEventListener('mouseup', imageSliderEndDrag);
        button.addEventListener('touchend', imageSliderEndDrag);

        button.addEventListener('mouseleave', imageSliderEndDrag);
    })();
}

imageSliderDraggableAddEvent(mainImageSlider);

// скролл якорей
const anchors = document.querySelectorAll('a[href*="#"]');

anchors.forEach((elm) => {
    elm.addEventListener('click', function (e) {
        e.preventDefault();

        const blockID = elm.getAttribute('href').substr(1);
    
        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });

        // clickHeaderMenu();
        // document.body.classList.remove('header-menu_opened');
    });
});