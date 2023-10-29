async function sendOrder(order) {
    console.log(order);

    // await axios.post('/sendOrder.php', order)
    //     .then((res) => {
    //         console.log('order', order);
    //         console.log(res);
    //     })
    //     .catch((err) => {
    //         console.warn(err)
    //     })
};

const mainImageSlider = document.getElementById('main-image-slider');
const bodyContaner = document.querySelector('body');
const MAIN_WRAPPER_WIDTH = document.querySelector('.wrapper-main').offsetWidth;
const imageSlidersArray = [
    'main-image-slider',
    // 'examples-image-slider-0',
    // 'examples-image-slider-1',
    // 'examples-image-slider-2',
    // 'examples-image-slider-3',
]
// эвенты на слайдеры картинок
// const imageSliderDraggableAddEvent = (slider) => {
//     const button = slider.querySelector('.image-slider__button');
//     const slideImage = slider.querySelector('.image-slider__img_front');

//     slideImage.addEventListener('input', () => {
//         // console.log('kek');
//         // console.log(slideImage.getBoundingClientRect());
//         // console.log(bodyExtraWidth);
//         console.log('KEKW');
//     })
//     slider.style.height = ((slider.offsetWidth * 3) / 4) + 'px';

//     let isDrag = false;
//     let limitLeft = 30;
//     let limitRight = 30;
//     const bodyExtraWidth = (bodyContaner.offsetWidth - MAIN_WRAPPER_WIDTH) / 2;

//     // console.log(slider.offsetWidth);

//     const imageSliderStartDrag = (e) => {
//         console.log('startDrag');
//         isDrag = true;
//         // console.log(bodyContaner);
//         bodyContaner.classList.add('noselect');
//     };
    
//     const imageSliderMoveDrag = (e) => {
//         if (!isDrag) {
//             return
//         }

//         let clientX = e.clientX;
//         // console.log(clientX * 100 / bodyContaner.offsetWidth);
//         // console.log(bodyContaner.offsetWidth - MAIN_WRAPPER_WIDTH);
        
//         if (!e.clientX) {
//             clientX = e.touches[0].clientX;
//         }

//         console.log(clientX);

//         if (clientX - 17 - bodyExtraWidth > slider.offsetWidth - limitLeft
//             || clientX - 17 - bodyExtraWidth < limitRight 
//         ) {
//             console.log('da');
//             return;
//         }

//         // console.log(e);
//         slideImage.style.width = clientX - 17 - bodyExtraWidth + 'px';
//         button.style.left = clientX - 17 - bodyExtraWidth + 'px';
        
//         // console.log('moveDrag');
//     };
    
//     const imageSliderEndDrag = (e) => {
//         bodyContaner.classList.remove('noselect');

//         if (!isDrag) {
//             return;
//         }

//         isDrag = false;
//         console.log('endDrag');
//     };

//     (() => {
//         button.addEventListener('mousedown', imageSliderStartDrag);
//         button.addEventListener('touchstart', imageSliderStartDrag);
    
//         button.addEventListener('mousemove', imageSliderMoveDrag);
//         button.addEventListener('touchmove', imageSliderMoveDrag);
    
//         button.addEventListener('mouseup', imageSliderEndDrag);
//         button.addEventListener('touchend', imageSliderEndDrag);

//         button.addEventListener('mouseleave', imageSliderEndDrag);
//     })();
// }

const imageSliderDraggableAddEvent = (slider) => {
    // set vars
    const imageSliderContainer = slider.querySelector(".image-slider-container");
    const rangeSlider = slider.querySelector(".range-slider");
    const image = slider.getElementsByClassName("image")[1];
    const buttonRange = slider.getElementsByClassName("slider-control")[0];
    slider.style.height = ((slider.offsetWidth * 3) / 4) + 'px';
    // Move slider and buttonRange at change of value
    rangeSlider.addEventListener("input", (e) => {
        const sliderPos = e.target.value;

        image.style.width = sliderPos + "%";
        buttonRange.style.left = sliderPos + "%";
    });

    imageSliderContainer.addEventListener("mousemove", (e) => {
        const reduceMovement = (n) => n / 25;

        imageSliderContainer.animate(
            {
                transform: `scale(1) rotateX(${reduceMovement(
                    e.movementY
                )}deg) rotateY(${reduceMovement(e.movementX)}deg)`
            },
            { duration: 1200 }
        );
    });

    imageSliderContainer.addEventListener("mouseout", (e) => {
        imageSliderContainer.animate(
            { transform: `scale(1) rotateX(0deg) rotateY(0deg)` },
            { duration: 250, fill: "forwards" }
        );
    });
}
const imageSliderAddEvents = (slidersArray) => {
    if (!slidersArray) {
        return;
    }

    slidersArray.forEach((sliderId) => {
        const imageSlider = document.getElementById(sliderId);
        imageSliderDraggableAddEvent(imageSlider);

    })
};

imageSliderAddEvents(imageSlidersArray);
// imageSliderDraggableAddEvent(mainImageSlider);

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

const order = {
    userName: '',
    userPhone: '',
    userComment: '',
};

const headerMenuButton = document.getElementById('header-menu-button');
const headerLinks = document.querySelectorAll('.header-link');
const phoneText = document.querySelector('.phone');

const calculatorForm = document.getElementById('calculator-form');
const calculatorFormButton = document.getElementById('calculator-form-button');

const calculatorInputName = document.getElementById('calculator-input-name');
const calculatorInputPhone = document.getElementById('calculator-input-phone')
const calculatorInputComment = document.getElementById('calculator-input-comment')

const modal = document.querySelector('.modal');
const modalCloseButton = modal.querySelector('.modal-content__close-button');

const popup = document.querySelector('.popup');
const popupCloseButton = popup.querySelector('.popup-content__close-button');

headerMenuButton.addEventListener('click', () => {
    if (document.body.classList.contains('header-links_opened')) {
        document.body.classList.remove('header-links_opened');
    } else {
        document.body.classList.add('header-links_opened');
    }
});

headerLinks.forEach((link) => {
    link.addEventListener('click', () => {
        document.body.classList.remove('header-links_opened');
    });
});

phoneText.addEventListener('click', async () => {
    const number = phoneText.querySelector('span');
    console.log(number.innerText);
    await navigator.clipboard.writeText(number.innerText);
    popup.classList.add('popup_active');

    setTimeout(() => {
        popup.classList.remove('popup_active');
    }, 4000)
});

modalCloseButton.addEventListener('click', () => {
    closeModal(modal);
})

popupCloseButton.addEventListener('click', () => {
    popup.classList.remove('popup_active');
});

calculatorFormButton.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('kek')
    if (!modalError) {
        openModal(modal);
        sendOrder(order);
    }
})

const openModal = (modal) => {
    modal.classList.add('modal_active');
    document.body.style.overflow = 'hidden'
};

const closeModal = (modal) => {
    modal.classList.remove('modal_active');
    document.body.removeAttribute("style");
};

const validateModalInput = (input) => {
    if (!input.value) {
        return "Заполните поле";
    }

    return null;
};

// Валидация модалки
const validateModal = () => {

    let errorName = null;
    let errorPhone = validateModalInput(calculatorInputPhone);
    let errorComment = null;

    if (errorName || errorPhone || errorComment) {
        return true;
    }

    return false;
};

let modalError = validateModal();

calculatorInputName.addEventListener('input', (e) => {
    order.userName = e.target.value;
    modalError = validateModal();
    disableButton(calculatorFormButton, modalError);
});

calculatorInputPhone.addEventListener('input', (e) => {
    order.userPhone = e.target.value;
    modalError = validateModal();
    disableButton(calculatorFormButton, modalError);
});

calculatorInputComment.addEventListener('input', (e) => {
    order.userComment= e.target.value;
    modalError = validateModal();
    disableButton(calculatorFormButton, modalError);
});

const disableButton = (button, error) => {
    if (error || error === undefined) {
        button.setAttribute('disabled', 'disabled');
    } else {
        button.removeAttribute('disabled');
    }
};

disableButton(calculatorFormButton, modalError);

