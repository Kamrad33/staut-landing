async function sendOrder(order) {
    console.log('order', order);

    // await axios.post('/staut/sendOrder.php', order)
    //     .then((res) => {
    //         console.log('order', order);
    //         console.log(res);
    //     })
    //     .catch((err) => {
    //         console.warn(err)
    //     });
    const formData = new FormData();
    let files = order.files;
    formData.append('userName', order.userName);
    formData.append('userPhone', order.userPhone)
    formData.append('userComment', order.userComment);
    for (let i = 0; i < files.length; i++) {
        formData.append("files[]", files[i]);
    }
    console.log('formData.get', formData.get('files'));
    // formData.append('files[]', order.files);

    // await axios.post('/staut/sendTg.php', order)
    //     .then((res) => {
    //         console.log('order', order);
    //         console.log(res);
    //     })
    //     .catch((err) => {
    //         console.warn(err)
    //     });

    await axios.post('/staut/sendTg.php', formData)
        .then((res) => {
            console.log('order', order);
            console.log(res);
        })
        .catch((err) => {
            console.warn(err)
        });
};

const mainImageSlider = document.getElementById('main-image-slider');
const bodyContaner = document.querySelector('body');
const MAIN_WRAPPER_WIDTH = document.querySelector('.wrapper-main').offsetWidth;
const imageSlidersArray = ['main-image-slider'];

const imageSliderDraggableAddEvent = (slider) => {
    // set vars
    const sliderParent = document.querySelector('.slider');
    const imageSliderContainer = slider.querySelector(".image-slider-container");
    const rangeSlider = slider.querySelector(".range-slider");
    const image = slider.getElementsByClassName("image")[1];
    const buttonRange = slider.getElementsByClassName("slider-control")[0];

    console.log(sliderParent.offsetWidth );
    slider.style.width = sliderParent.offsetWidth + 'px';
    slider.style.height = ((slider.offsetWidth * 3) / 4) + 'px';
    // slider.style.width = ((slider.offsetHeight * 4) / 3) + 'px';
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
    files: {},
};

const headerMenuButton = document.getElementById('header-menu-button');
const headerLinks = document.querySelectorAll('.header-link');
const headerLinksBackground = document.querySelector('.header-links__background');
const phoneText = document.querySelector('.phone');
const phoneFooter = document.querySelector('.footer-phone__number');

const calculatorForm = document.getElementById('calculator-form');
const calculatorFormButton = document.getElementById('calculator-form-button');

const calculatorInputName = document.getElementById('calculator-input-name');
const calculatorInputNameAlert = document.getElementById('calculator-input-name-alert');
const calculatorInputPhone = document.getElementById('calculator-input-phone');
const calculatorInputPhoneAlert = document.getElementById('calculator-input-phone-alert');
const calculatorInputComment = document.getElementById('calculator-input-comment');
const calculatorInputFile = document.getElementById('upload-files');

const modal = document.querySelector('.modal');
const modalCloseButton = modal.querySelector('.modal-content__close-button');

const popup = document.querySelector('.popup');
const popupCloseButton = popup.querySelector('.popup-content__close-button');

headerLinksBackground.addEventListener('click', () => {
    if (document.body.classList.contains('header-links_opened')) {
        document.body.classList.remove('header-links_opened');
    } else {
        document.body.classList.add('header-links_opened');
    }
});

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

const phoneCopyToBufferClick = (elm) => {
    elm.addEventListener('click', async () => {
        const number = elm.querySelector('span');
        await navigator.clipboard.writeText(number.innerText);
        popup.classList.add('popup_active');
    
        setTimeout(() => {
            popup.classList.remove('popup_active');
        }, 4000)
    });
    
}

phoneCopyToBufferClick(phoneText);
phoneCopyToBufferClick(phoneFooter);

modalCloseButton.addEventListener('click', () => {
    closeModal(modal);
})

popupCloseButton.addEventListener('click', () => {
    popup.classList.remove('popup_active');
});

calculatorFormButton.addEventListener('click', (e) => {
    e.preventDefault();

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

const validateModalInput = (input, type, isChanged) => {
    if (!isChanged) {
        return null;
    }

    if (!input.value) {
        return "Заполните поле";
    }

    if (type === 'email') {
        const validateEmailRegex = /^\S+@\S+\.\S+$/;
        const validatePhoneRegex = /(?:\+|\d)[\d\-\(\) ]{9,}\d/g;
        
        if (!validateEmailRegex.test(input.value) && !validatePhoneRegex.test(input.value)) {
            return "Введите корректный email";
        }
    }

    return null;
};

const changedInput = {
    nameInput: false,
    phoneInput: false,
};

// Валидация модалки
const validateModal = () => {
    const {
        nameInput,
        phoneInput,
    } = changedInput;

    let errorName = validateModalInput(calculatorInputName, 'text', nameInput);
    let errorPhone = validateModalInput(calculatorInputPhone, 'email', phoneInput);
    let errorComment = null;

    calculatorInputNameAlert.innerText = errorName;
    calculatorInputPhoneAlert.innerText = errorPhone;

    if (errorName || errorPhone || errorComment || !nameInput || !phoneInput) {
        return true;
    }

    return false;
};

let modalError = validateModal();

calculatorInputName.addEventListener('input', (e) => {
    changedInput.nameInput = true;
    order.userName = e.target.value;

    modalError = validateModal();
    disableButton(calculatorFormButton, modalError);
});

calculatorInputPhone.addEventListener('input', (e) => {
    changedInput.phoneInput = true;
    order.userPhone = e.target.value;

    modalError = validateModal();
    disableButton(calculatorFormButton, modalError);
});

calculatorInputComment.addEventListener('input', (e) => {
    order.userComment= e.target.value;
    modalError = validateModal();
    disableButton(calculatorFormButton, modalError);
});

const calculatorFiles = document.getElementById('calculator-files');
const fileList = new DataTransfer(); // буфер файлов

// удаление файлов из буфера
const deleteFile = (name, fileList) => {
    Object.values(order.files).forEach((file, i) => {
        if (file.name === name) {
            fileList.items.remove(i);
        }
    });
    
    order.files = fileList.files;

    if (!order.files.length) {
        order.files = {};
    }

    renderFiles(order.files);
};

// рендер функция файлов
const renderFiles = (files) => {
    calculatorFiles.innerHTML = '';

    Object.values(files).forEach((item) => {
        const fileItem = document.createElement('div');
        const fileTitle = document.createElement('div');
        const deleteButton = document.createElement('div');

        fileItem.classList.add('file-item');
        deleteButton.classList.add('file-item__close');

        deleteButton.addEventListener('click', () => {
            deleteFile(item.name, fileList);
        });

        fileTitle.innerText = `${item.name}`;

        fileItem.appendChild(fileTitle);
        fileItem.appendChild(deleteButton);
        calculatorFiles.appendChild(fileItem);
    });
};

calculatorInputFile.addEventListener('input', (e) => {
    const selectedFiles = e.target.files;
    console.log(selectedFiles);

    console.log('start', order.files);

    Object.values(selectedFiles).forEach((file) => {
        const exist = Object.values(fileList.files)
            .find((elm) => elm.name === file.name);
        console.log('ESIST', exist);

        if (!exist) {
            fileList.items.add(file);
        }
    });

    order.files = fileList.files;

    console.log('end', order.files);



    // if (!Object.keys(order.files).length) {
    //     Object.values(selectedFiles).forEach((file) => {
    //         fileList.items.add(file);
    //     });

    //     order.files = fileList.files;
    //     console.log('yes', order.files);
    // } else {
    //     console.log('no', order.files);
    //     Object.values(order.files).forEach((file) => {

    //         const exist = Object.values(fileList.files)
    //             .find((elm) => elm.name === file.name);
    //         console.log('EXIST 1', exist, file);
    //         // console.log('EXIST 1', Object.values(fileList.files).forEach((elm) => {console.log('elm.nameEEEEEEEEEEEEEE', elm.name);}));
    //         if (!exist) {
    //             fileList.items.add(file);
    //         }
    //     });
    //     // console.log('RESULT1 ', fileList.files);

    //     Object.values(selectedFiles).forEach((file) => {
    //         console.log('cicle', fileList.files);
    //         const exist = Object.values(fileList.files)
    //             .find((elm) => {elm.name === file.name});
    //         console.log('EXIST 2', exist);
    //         if (!exist) {
    //             fileList.items.add(file);

    //             // console.log('RESULT 2', fileList.files);
    //         }
    //     });

    //     order.files = fileList.files;
    // }

    renderFiles(order.files);

    calculatorInputFile.value = null; // обнуление эвента
})

const disableButton = (button, error) => {
    if (error || error === undefined) {
        button.setAttribute('disabled', 'disabled');
    } else {
        button.removeAttribute('disabled');
    }
};

disableButton(calculatorFormButton, modalError);

const addLineSliderEvent = () => {
    const examplesSliderButtonLeft = document.getElementById('examples-slider-button-left');
    const examplesSliderButtonRight = document.getElementById('examples-slider-button-right');

    const examplesSliderButtonBottomLeft = document.getElementById('examples-slider-button-bottom-left');
    const examplesSliderButtonBottomRight = document.getElementById('examples-slider-button-bottom-right');

    const sliderLine = document.getElementById('examples-slider-line');
    const sliderItem = document.querySelector('.slider__item');

    let sliderNext = 0;
    const gap = 20;

    const sliderMain = document.querySelector('.slider');

    // sliderMain.style.height = (sliderMain.offsetWidth * 3) / 4 + 'px';

    examplesSliderButtonRight.addEventListener('click', () => {
        let offset = sliderItem.offsetWidth;

        if (sliderNext > ((sliderLine.childElementCount - 2) * offset)) {sliderNext = -(offset + gap)}

        sliderNext += (offset + gap);
        sliderLine.style.right = sliderNext + 'px';
    });

    examplesSliderButtonLeft.addEventListener('click', () => {
        let offset = sliderItem.offsetWidth;

        if (sliderNext <= 0) {sliderNext = ((sliderLine.childElementCount) * (offset + gap))}
    
        sliderNext -= (offset + gap);
        sliderLine.style.right = sliderNext + 'px';
    });

    examplesSliderButtonBottomRight.addEventListener('click', () => {
        let offset = sliderItem.offsetWidth;

        if (sliderNext > ((sliderLine.childElementCount - 2) * offset)) {sliderNext = -(offset + gap)}

        sliderNext += (offset + gap);
        sliderLine.style.right = sliderNext + 'px';
    });

    examplesSliderButtonBottomLeft.addEventListener('click', () => {
        let offset = sliderItem.offsetWidth;

        if (sliderNext <= 0) {sliderNext = ((sliderLine.childElementCount) * (offset + gap))}
    
        sliderNext -= (offset + gap);
        sliderLine.style.right = sliderNext + 'px';
    });

    let items = sliderLine.querySelectorAll('.slider__item');

    items.forEach((item) => {
        let imageSlider = item.querySelector('.slider__item__image');
        imageSliderDraggableAddEvent(imageSlider);
    });

    imageSliderAddEvents(imageSlidersArray);
};

addLineSliderEvent();

const addReviewSliderEvent = () => {
    const examplesSliderButtonLeft = document.getElementById('review-slider-button-left');
    const examplesSliderButtonRight = document.getElementById('review-slider-button-right');
    let counter = document.querySelector('.review-slider__counter');

    const sliderImage= document.querySelector('.review-slider__image');
    const sliderLine = document.getElementById('review-slider-line');
    const sliderItem = document.querySelectorAll('.review-slider__line__item');
    const gap = 20;

    sliderImage.style.height = (sliderImage.offsetWidth * 9) / 16 + 'px';

    sliderItem.forEach((elm) => {
        elm.style.height = sliderImage.style.height
        elm.style.width = sliderImage.offsetWidth + 'px';
    });

    let sliderNext = 0;
    let pageNumber = 1;
    counter.innerText = `${pageNumber} из ${sliderLine.childElementCount}`;

    examplesSliderButtonRight.addEventListener('click', () => {
        let offset = sliderItem[0].offsetWidth;
        pageNumber++;

        if (sliderNext > ((sliderLine.childElementCount - 2) * (offset + gap))) {
            sliderNext = -(offset + gap);
            pageNumber = 1;
        }

        sliderNext += (offset + gap);
        sliderLine.style.right = sliderNext + 'px';
        counter.innerText = `${pageNumber} из ${sliderLine.childElementCount}` 
    });

    examplesSliderButtonLeft.addEventListener('click', () => {
        let offset = sliderItem[0].offsetWidth;
        pageNumber--;

        if (sliderNext <= 0) {
            sliderNext = ((sliderLine.childElementCount) * (offset + gap));
            pageNumber = sliderLine.childElementCount;
        }

        sliderNext -= (offset + gap);
        sliderLine.style.right = sliderNext + 'px';
        counter.innerText = `${pageNumber} из ${sliderLine.childElementCount}`
    });
};

addReviewSliderEvent();

