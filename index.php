<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="./assets/fonts/Monsterrat/stylesheet.css" rel="stylesheet">
    <link href="./assets/css/index.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="24x24" href="./assets/favicons/favicon.png">
    <script defer src="./assets/js/index.js" type="module"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <meta name="title" content="STAUT - изготовление мебели на заказ">
    <meta name="description" content="Изготовление кoрпуcной мeбели на заказ в Москве, Московской области, Владимире и Владимирской области. Гapaнтия 18 меcяцев.">
    <title>STAUT кухонная мебель на заказ</title>
</head>
<body class="body-main noselect">
    <div class="body-main__wrapper">
        <div class="modal">
            <div class="modal-content">
                <div class="modal-content__close-button"></div>
                <div class="modal-content__body">
                    <div class="modal-content__body__title">Ваша заявка успешно отправлена!</div>
                    <div class="modal-content__body__text">В ближайшее время с ваши свяжется наш менеджер</div>
                </div>
            </div>
        </div>
        <div class="popup">
            <div class="popup-content">
                <div class="popup-content__close-button"></div>
                <div class="popup-content__body">
                    <div class="popup-content__body__text">Скопировано в буфер обмена</div>
                </div>
            </div>
        </div>
        <header>
            <div class="wrapper-main header-content">
                <a  
                    href="/"
                    class="logo"
                >
                    <img src="./assets/images/logo.svg" alt="STAUT"/>
                </a>
                <div class="header-links__background"></div>
                <div class="header-links ">
                    <a class="header-link" href="#examples-title">Портфолио</a>
                    <a class="header-link" href="#benefits-title">О нас</a>
                    <a class="header-link" href="#reviews-title">Отзывы</a>
                    <a class="header-link" href="#calculator">Заказ</a>
                    <a class="header-link" href="#footer">Контакты</a>
                    <div class="header-links__phone">
                        <div>Свяжитесь с нами</div>
                        <div>
                            <a href="tel:+74955326556" itemprop="telephone">+7 (930) 033 03 50</a>
                        </div>
                    </div>
                </div>
                <div class="phone">
                    <img src="./assets/images/phone.svg"/>
                    <a href="tel:+74955326556" itemprop="telephone">+7 (930) 033 03 50</a>
                </div>
                <div class="header__menu-button" id="header-menu-button">
                    <div></div>
                </div>
            </div>
        </header>
        <div class="main-content">
            <div class="main-info main-content__background">
                <div class="wrapper-main main-content__block">
                    <div id="main-image-slider" class="main-content__block__item main-content__block__item_double">
                        <div class="image-slider-container">
                            <div class="image background-image"></div>
                            <div class="image foreground-image"></div>
                            <input id="range-slider" class="range-slider" name="slider" type="range" min="10" max="90" value="50" />
                            <div class="slider-control"></div>
                        </div>
                    </div>
                    <div class="main-content__block__item main-content__block__item_double">
                        <h1 class="title_h1">Кухня по фото за 30 дней</h1>
                        <div class="title__description main-info__description">Кухня мечты - твоя реальность<br /> Заполни анкету, присылай любимые идеи и наши специалисты помогут с расчетом </div>
                        <a href="#calculator">
                            <button class="button button_lg button_black">Расчитать стоимость</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="examples main-content__background main-content__background_black">
                <div class="wrapper-main main-content__block main-content__block_vertical">
                    <div class="title-slider">
                        <h2 id="examples-title" class="title_h2">Мы реализовали</h2>
                        <div class="title-slider__buttons">
                            <button class="button button_circle button_black" id="examples-slider-button-left">
                                <img src="./assets/images/circleBtn.svg" alt="">
                            </button>
                            <button class="button button_circle button_circle_reverse button_black" id="examples-slider-button-right">
                                <img src="./assets/images/circleBtn.svg" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="examples__slider">
                        <div class="slider">
                            <div class="slider__line" id="examples-slider-line" style="right: 0px">
                                <!-- элемент слайдера -->
                                <div class="slider__item">
                                    <div class="slider__item__image">
                                        <div class="image-slider-container">
                                            <!-- Upper Image -->
                                            <div class="image background-image"></div>
                                            <!-- <div class="image">
                                                <div class="background-image"></div>
                                            </div> -->
                                            <!-- Lower Image -->
                                            <div class="image foreground-image"></div>
                                            <!-- <div class="image">
                                                <div class="foreground-image"></div>
                                            </div> -->
                                            <!-- Range Input -->
                                            <input id="range-slider" class="range-slider" name="slider" type="range" min="10" max="90" value="50" />
                                        
                                            <!-- Slider Control -->
                                            <div class="slider-control slider-control_white"></div>
                                        </div>
                                    </div>
                                    <div class="slider__item__title">
                                        <div>Karther 1</div>
                                        <div>100 000 Р 34 дня</div>
                                    </div>
                                </div>

                                <!-- элемент слайдера -->
                                <div class="slider__item">
                                    <div class="slider__item__image">
                                        <div class="image-slider-container">
                                            <!-- Upper Image -->
                                            <div class="image background-image"></div>
                                            <!-- <div class="image">
                                                <div class="background-image"></div>
                                            </div> -->
                                            <!-- Lower Image -->
                                            <div class="image foreground-image"></div>
                                            <!-- <div class="image">
                                                <div class="foreground-image"></div>
                                            </div> -->
                                            <!-- Range Input -->
                                            <input id="range-slider" class="range-slider" name="slider" type="range" min="10" max="90" value="50" />
                                        
                                            <!-- Slider Control -->
                                            <div class="slider-control slider-control_white"></div>
                                        </div>
                                    </div>
                                    <div class="slider__item__title">
                                        <div>Karther 2</div>
                                        <div>100 000 Р 34 дня</div>
                                    </div>
                                </div>

                                <!-- элемент слайдера -->
                                <div class="slider__item">
                                    <div class="slider__item__image">
                                        <div class="image-slider-container">
                                            <!-- Upper Image -->
                                            <div class="image background-image"></div>
                                            <!-- <div class="image">
                                                <div class="background-image"></div>
                                            </div> -->
                                            <!-- Lower Image -->
                                            <div class="image foreground-image"></div>
                                            <!-- <div class="image">
                                                <div class="foreground-image"></div>
                                            </div> -->
                                            <!-- Range Input -->
                                            <input id="range-slider" class="range-slider" name="slider" type="range" min="10" max="90" value="50" />
                                        
                                            <!-- Slider Control -->
                                            <div class="slider-control slider-control_white"></div>
                                        </div>
                                    </div>
                                    <div class="slider__item__title">
                                        <div>Karther 3</div>
                                        <div>100 000 Р 34 дня</div>
                                    </div>
                                </div>

                                <!-- элемент слайдера -->
                                <div class="slider__item">
                                    <div class="slider__item__image">
                                        <div class="image-slider-container">
                                            <!-- Upper Image -->
                                            <div class="image background-image"></div>
                                            <!-- <div class="image">
                                                <div class="background-image"></div>
                                            </div> -->
                                            <!-- Lower Image -->
                                            <div class="image foreground-image"></div>
                                            <!-- <div class="image">
                                                <div class="foreground-image"></div>
                                            </div> -->
                                            <!-- Range Input -->
                                            <input id="range-slider" class="range-slider" name="slider" type="range" min="10" max="90" value="50" />
                                        
                                            <!-- Slider Control -->
                                            <div class="slider-control slider-control_white"></div>
                                        </div>
                                    </div>
                                    <div class="slider__item__title">
                                        <div>Karther 4</div>
                                        <div>100 000 Р 34 дня</div>
                                    </div>
                                </div>

                                <!-- элемент слайдера -->
                                <div class="slider__item">
                                    <div class="slider__item__image">
                                        <div class="image-slider-container">
                                            <!-- Upper Image -->
                                            <div class="image background-image"></div>
                                            <!-- <div class="image">
                                                <div class="background-image"></div>
                                            </div> -->
                                            <!-- Lower Image -->
                                            <div class="image foreground-image"></div>
                                            <!-- <div class="image">
                                                <div class="foreground-image"></div>
                                            </div> -->
                                            <!-- Range Input -->
                                            <input id="range-slider" class="range-slider" name="slider" type="range" min="10" max="90" value="50" />
                                        
                                            <!-- Slider Control -->
                                            <div class="slider-control slider-control_white"></div>
                                        </div>
                                    </div>
                                    <div class="slider__item__title">
                                        <div>Karther 5</div>
                                        <div>100 000 Р 34 дня</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='title-slider__bottom-buttons'>
                        <button class="button button_circle button_black" id="examples-slider-button-bottom-left">
                            <img src="./assets/images/circleBtn.svg" alt="">
                        </button>
                        <button class="button button_circle button_circle_reverse button_black" id="examples-slider-button-bottom-right">
                            <img src="./assets/images/circleBtn.svg" alt="">
                        </button>
                    </div>
                </div>
                <div class="steps">
                    <div class="wrapper-main main-content__block">
                        <div class="steps__item">
                            <div class="steps__item__number">
                                <div>01</div>
                                <a class="button-a" href="#calculator">
                                    <button class="button button_lg button_black">Заполнить анкету</button>
                                </a>
                            </div>
                            <div class="steps__item__title">
                                Заполните анкету <br /> и прикрепите примеры желаемых работ
                            </div>
                        </div>
    
                        <div class="steps__item">
                            <div class="steps__item__number">
                                <div class="steps__item__number">02</div>
                            </div>
                            <div class="steps__item__title">
                                Получите расчет стоимости и бесплатную консультацию
                            </div>
                        </div>
    
                        <div class="steps__item">
                            <div class="steps__item__number">
                                <div >03</div>
                            </div>
                            <div class="steps__item__title">
                                Укажите необходимые параметры: цвет, размер и пр.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="benefits main-content__background">
                <div class="wrapper-main main-content__background main-content__block main-content__block_vertical">
                    <h2 id="benefits-title" class="title_h2">Почему нас выбирают</h2>
                    <div class="benefits__content">
                        <div class="benefits__block-wrapper">
                            <div class="benefits__block">
                                <div class="benefits__item">
                                    <div class="benefits__item__icon benefits__item__icon_right">
                                        <div class="benefits__item__text">ЛДСП, МДФ, Шпон, Массив более 450 расцветок. Дизайнеры помогут выбрать и покажут примеры.</div>
                                        <img src="./assets/images/notebook.png" alt="">
                                    </div>
                                    <h3 class="title_h3">Каталоги материалов<br />от 4 производителей</h3>
                                </div>
                            </div>
                            <div class="benefits__block">
                                <div class="benefits__item benefits__item_double">
                                    <div class="benefits__item__icon">
                                        <img src="./assets/images/coin.png" alt="">
                                        <h3 class="title_h3">Работаем по предоплате</h3>
                                    </div>
                                </div>
                                <div class="benefits__item benefits__item_double">
                                    <div class="benefits__item__icon">
                                        <img src="./assets/images/hat.png" alt="">
                                        <h3 class="title_h3">Изготавливаем под ваши размеры</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits__block-wrapper">
                            <div class="benefits__block">
                                <div class="benefits__item benefits__item_double">
                                    <div class="benefits__item__icon">
                                        <img src="./assets/images/lock.png" alt="">
                                        <h3 class="title_h3">Гарантия <br />18 месяцев</h3>
                                    </div>
                                </div>
                                <div class="benefits__item benefits__item_double">
                                    <div class="benefits__item__icon">
                                        <img src="./assets/images/man.png" alt="">
                                        <h3 class="title_h3">Выезд мастера <br />бесплатно</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="benefits__block">
                                <div class="benefits__item">
                                    <div class="benefits__item__icon benefits__item__icon_right">
                                        <div class="benefits__item__text">Материалы дешевле на 20 %, потому что мы не храним их на складе, а сразу везем к вам.</div>
                                        <img id="heart-icon" src="./assets/images/heart.png" alt="">
                                    </div>
                                    <h3 class="title_h3">Материалы<br />с доставкой</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="calculator" class="calculator wrapper-main main-content__block main-content__block_vertical">
                <div class="calculator__wrapper">
                    <div class="calculator__title_outside main-content__block__item main-content__block__item_double">
                        <h2 id="calculator-title-outside" class="title_h2 calculator__title">Получите расчет стоимости по вашим идеям</h2>
                    </div>
                    <div class="main-content__block__item main-content__block__item_double">
                        <form id="calculator-form" class="calculator-form" method="post" enctype="multipart/form-data">
                            <h2 id="calculator-title-inside" class="title_h2 calculator__title">Получите расчет стоимости по вашим идеям</h2>
                            <div class="calculator-form__inputs">
                                <div class="form-input">
                                    <input
                                        id="calculator-input-name"
                                        name="userName"
                                        class="input"
                                        placeholder="Ваше имя*"
                                    />
                                    <div class="form-input__alert" id="calculator-input-name-alert"></div>
                                </div>
                                <div class="form-input">
                                    <input
                                        id="calculator-input-phone"
                                        name="userPhone"
                                        class="input"
                                        placeholder="Телефон или e-mail*"
                                    />
                                    <div class="form-input__alert" id="calculator-input-phone-alert"></div>
                                </div>
                                <textarea
                                    id="calculator-input-comment"
                                    name="userComment"
                                    class="textarea"
                                    placeholder="Опишите суть работ"
                                ></textarea>
                            </div>
                            <div class="calculator-form__files">
                                <label class="file-label" for="upload-files">Прикрепить файл</label>
                                <input
                                    type="file"
                                    name="files[]"
                                    multiple
                                    id="upload-files"
                                />
                                <div class="calculator-form__files__items" id="calculator-files">
                                </div>
                            </div>
                            <div>
                                <button
                                    id="calculator-form-button"
                                    class="button button_md button_black button_full"
                                >Отправить</button>
                            </div>
                            <div class="calculator-form__rules">
                                Нажимая на кнопку отправить, вы соглашаетесь на <a href="#">обработку персональных данных</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="reviews wrapper-main main-content__background main-content__block main-content__block_vertical">
            <h2 id="reviews-title" class="title_h2">Отзывы</h2>
            <div>
                <div class="review">
                    <div class="review__title">Светлана о кухне Shneiderhopf</div>
                    <div class="review__content">
                        <div class="review-slider">
                            <div class="review-slider__image">
                                <div class="review-slider__line" id="review-slider-line">
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                    <div class="review-slider__line__item">
                                        <img src="./assets/images/commentImg_1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="review-slider__buttons">
                                <button class="button button_circle button_circle_white" id="review-slider-button-left">
                                    <svg viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32 38L19 31L32 24" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M43 31H19" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="review-slider__counter">1 из 7</div>
                                <button class="button button_circle button_circle_reverse button_circle_white" id="review-slider-button-right">
                                    <svg viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32 38L19 31L32 24" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M43 31H19" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="review__content__text">
                            <div class="review__content__title">
                                <div class="review__content__source">Авито</div>
                                <div class="review__content__stars">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="review__content__comment">Огрммная благодарность ребятам!!! заказала кухню. учли все мелочи. даже те, которые я не учла сама. Сделали быстро. мусора не оставили. я очень довольна . Ребята общительные и доброжелательные. Но самое главное, мне очень понравилась моя кухня. Спасибо!!!</div>
                        </div>
                    </div>
                </div>

                <div class="review">
                    <div class="review__title">Светлана о кухне Shneiderhopf</div>
                    <div class="review__content">
                        <div class="review__content__text">
                            <div class="review__content__title">
                                <div class="review__content__source">Авито</div>
                                <div class="review__content__stars">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="review__content__comment">Огрммная благодарность ребятам!!! заказала кухню. учли все мелочи. даже те, которые я не учла сама. Сделали быстро. мусора не оставили. я очень довольна . Ребята общительные и доброжелательные. Но самое главное, мне очень понравилась моя кухня. Спасибо!!!</div>
                        </div>
                    </div>
                </div>

                <div class="review">
                    <div class="review__title">Светлана о кухне Shneiderhopf</div>
                    <div class="review__content">
                        <div class="review__content__text">
                            <div class="review__content__title">
                                <div class="review__content__source">Авито</div>
                                <div class="review__content__stars">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" fill="#202020"/>
                                        <path d="M9.04894 1.0584C9.3483 0.137089 10.6517 0.137088 10.9511 1.0584L12.4697 5.73216C12.6035 6.14418 12.9875 6.42314 13.4207 6.42314H18.335C19.3037 6.42314 19.7065 7.66276 18.9228 8.23216L14.947 11.1207C14.5966 11.3753 14.4499 11.8267 14.5838 12.2387L16.1024 16.9125C16.4017 17.8338 15.3472 18.5999 14.5635 18.0305L10.5878 15.142C10.2373 14.8873 9.7627 14.8873 9.41221 15.142L5.43648 18.0305C4.65276 18.5999 3.59828 17.8338 3.89763 16.9125L5.41623 12.2387C5.55011 11.8267 5.40345 11.3753 5.05296 11.1207L1.07722 8.23216C0.293507 7.66276 0.696283 6.42314 1.66501 6.42314H6.57929C7.01252 6.42314 7.39647 6.14418 7.53035 5.73216L9.04894 1.0584Z" stroke="#202020"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="review__content__comment">Огрммная благодарность ребятам!!! заказала кухню. учли все мелочи. даже те, которые я не учла сама. Сделали быстро. мусора не оставили. я очень довольна . Ребята общительные и доброжелательные. Но самое главное, мне очень понравилась моя кухня. Спасибо!!!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="wrapper-main footer-content">
                <a  
                    href="/"
                    class="logo logo_footer"
                >
                    <img src="./assets/images/logo.svg" alt="STAUT"/>
                </a>
                <div class="footer-links__wrapper">
                    <div class="footer-links footer-links__nav">
                        <a class="footer-link" href="#examples-title">Портфолио</a>
                        <a class="footer-link" href="#benefits-title">О нас</a>
                        <a class="footer-link" href="#reviews-title">Отзывы</a>
                        <a class="footer-link" href="#calculator">Заказ</a>
                    </div>
                </div>
                
                <div class="footer-links__wrapper">
                    <div class="footer-social__title">Мы в социальных сетях</div>
                    <div class="footer-links">
                        <a class="footer-link" href="https://t.me/StautBot">Телеграмм</a>
                        <a class="footer-link" href="https://ok.ru/group/70000004650801">Одноклассники</a>
                        <a class="footer-link" href="whatsapp://send?phone=79300330350">WhatsApp</a>
                        <a class="footer-link" href="https://vk.com/staut_shop">Вконтакте</a>
                    </div>
                </div>
                
                <div class="footer-phone">
                    <div class="footer-phone__title">Свяжитель с нами:</div>
                    <div class="footer-phone__number"><a href="tel:+74955326556" itemprop="telephone"><span>+7 (930) 033 03 50<span></a></div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>