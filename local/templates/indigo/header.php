<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>

    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Индиго-дезинфекторы и моющие средства</title>
    <link rel="shortcut icon" href="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>css/style.css?10"/>
    <link rel="stylesheet" href="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>css/fonts.css"/>
    <link rel="stylesheet" href="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>css/normalize.css"/>
    <link rel="stylesheet" href="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>css/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>js/common.js"></script>
    <script src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>js/jquery.maskedinput.js"></script>
    <script src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>js/slick.min.js"></script>

    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico"/>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header>
    <div class="logo">
        <a href="/"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/logo.svg" alt="Индиго"></a>
        <span>Дезинфекторы и моющие средства</span>
    </div>
    <div class="header-wrap">
        <div class="header-left">
            <nav id="nav-wrap">
                <ul class="menu" id="nav">
                    <li>
                        <a href="#win">О нас</a>
                    </li>
                    <li>
                        <a href="#win">Новости и Акции</a>
                    </li>
                    <li>
                        <a href="#win">Доставка и оплата</a>
                    </li>
                    <li>
                        <a href="#win">Контакты</a>
                    </li>
                    <li class="user">
                        <a href="#win">Личный кабинет</a>
                    </li>
                </ul>
            </nav>
            <a href="#win" class="header-cat">Каталог<br>товаров</a>
        </div>
        <div class="header-right">
            <div class="header-phone">
                <a href="tel:8 (800) 600-72-30">8 (800) 600-72-30</a>
                (бесплатный звонок по РФ)
            </div>
            <a href="#win" class="header-search"></a>
            <a href="#win" class="header-user"></a>
            <a href="#win" class="header-cart"></a>
        </div>
    </div>
</header>
<div class="slider-wrap">
    <div class="item">
        <div class="container">
            <div class="item-desc">
                <div class="item-title">Индиго создаёт чистоту</div>
                <div class="item-text">
                    <span>в бьюти-сфере</span>
                </div>
            </div>
            <div class="item-butts">
                <a href="#call" class="butt1">Заказать звонок</a>
                <a href="#win" class="butt2">Подробнее</a>
            </div>
        </div>
        <img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/sl1.png" alt="">
    </div>
    <div class="item">
        <div class="container">
            <div class="item-desc">
                <div class="item-title">Индиго создаёт чистоту</div>
                <div class="item-text">в офисе</div>
            </div>
            <div class="item-butts">
                <a href="#call" class="butt1">Заказать звонок</a>
                <a href="#win" class="butt2">Подробнее</a>
            </div>
        </div>
        <img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/sl2.png" alt="">
    </div>
    <div class="item">
        <div class="container">
            <div class="item-desc">
                <div class="item-title">Индиго создаёт чистоту</div>
                <div class="item-text">в медицине</div>
            </div>
            <div class="item-butts">
                <a href="#call" class="butt1">Заказать звонок</a>
                <a href="#win" class="butt2">Подробнее</a>
            </div>
        </div>
        <img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/sl3.png" alt="">
    </div>
    <div class="item">
        <div class="container">
            <div class="item-desc">
                <div class="item-title">Индиго создаёт чистоту</div>
                <div class="item-text">дома</div>
            </div>
            <div class="item-butts">
                <a href="#call" class="butt1">Заказать звонок</a>
                <a href="#win" class="butt2">Подробнее</a>
            </div>
        </div>
        <img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/sl1.png" alt="">
    </div>
</div>
<div class="advantages">
    <div class="container">
        <h3>Наши преимущества</h3>
        <div class="advantages-wrap">
            <div class="item">
                <div class="item-title">Собственное производство</div>
                <div class="item-text">Вы можете заказать нашу продукцию в розницу в объеме от 100 мл до 5 л или оптом
                    от 1 тонны и более
                </div>
            </div>
            <div class="item">
                <div class="item-title">Безопасность</div>
                <div class="item-text">Все средства "ИНДИГО" произведены в соответствии с международными стандартами
                    качества, и а также соответствуют нормам СанПиН Российской Федерации
                </div>
            </div>
            <div class="item">
                <div class="item-title">Комплексное решение</div>
                <div class="item-text">Для медицинских центров, клиник и стоматологий</div>
            </div>
            <div class="item">
                <div class="item-title">Доступность</div>
                <div class="item-text">Мы доставляем наши средства по всей территории России. Бесплатно по г. Казань до
                    терминала и 30 км. от города
                </div>
            </div>
            <div class="item">
                <div class="item-title">Качество</div>
                <div class="item-text">Из года в год нас выбирают и нам доверяют более 100 партнеров и медицинских
                    учреждений по всей России
                </div>
            </div>
            <div class="item">
                <div class="item-title">Стабильность</div>
                <div class="item-text">Уже 7 лет средства "ИНДИГО" используют для поддержания санитарных условий</div>
            </div>
        </div>
    </div>
</div>
<div class="popular">
    <div class="container">
        <h3>Популярные продукты</h3>
        <div class="popular-wrap">
            <div class="item">
                <div class="item-img"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/item1.jpg" alt=""></div>
                <div class="item-name">Средство дезинфицирующее ИндиХлор (Таблетки)</div>
                <a href="#win"></a>
            </div>
            <div class="item">
                <div class="item-img"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/item2.jpg" alt=""></div>
                <div class="item-name">Средство дезинфицирующее Индисепт ИЗО (Антисептик)</div>
                <a href="#win"></a>
            </div>
            <div class="item">
                <div class="item-img"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/item3.jpg" alt=""></div>
                <div class="item-name">Средство дезинфицирующее ИндиБак (концентрат)</div>
                <a href="#win"></a>
            </div>
        </div>
    </div>
</div>
<div class="partners">
    <div class="container">
        <h3>Наши партнеры</h3>
        <div class="partners-wrap">
            <div class="item"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/p1.png" alt=""></div>
            <div class="item"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/p2.png" alt=""></div>
            <div class="item"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/p3.png" alt=""></div>
            <div class="item"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/p4.png" alt=""></div>
        </div>
    </div>
</div>
<div class="company">
    <div class="container">
        <div class="company-bg"></div>
        <div class="company-text">
            <h3>Почему мы?</h3>
            <p><strong>Доказанная эффективность средств</strong> (в составе используются только самые эффективные
                импортные компоненты).</p>
            <p><strong>Контроль каждой партии в собственной лаборатории</strong>.</p>
            <p><strong>Постоянное совершенствование производственных процессов</strong>, разработка новых средств,
                отвечающих запросам рынка.</p>
            <p><strong>Широкий спектр применимости средств</strong> (в соответствии с согласованной МинЗдравом
                инструкции).</p>
            <p><strong>Геолокация производства и удобная логистика</strong> (мы находимся в Казани, в центре нашей
                необъятной родины, на границе Европы и Азии).</p>
            <p><strong>Производственные мощности удовлетворяющие текущие запросы рынка</strong>, при необходимости,
                легко масштабируемые (на данный момент, мы производим до 30 тонн продукции в сутки).</p>
        </div>
    </div>
</div>
<div class="form-big">
    <div class="container">
        <form method="post" id="form1">
            <div class="form-big-title">Есть вопросы или хотите заказать оптом? Заполните форму</div>
            <div class="form-big-wrap">
                <div class="item field">
                    <label>Ваше имя</label>
                    <input name="name">
                </div>
                <div class="item field">
                    <label>Номер телефона</label>
                    <input name="phone" class="in1">
                </div>
                <div class="item">
                    <button>Отправить</button>
                </div>
                <div class="item checks">
                    <div class="check check1"><input type="radio" id="c1" name="sub" value="Я оптовик">
                        <label for="c1">
                            <span></span>
                            Я оптовик
                        </label>
                    </div>
                    <div class="check check1"><input type="radio" id="c2" name="sub" value="Другой вопрос">
                        <label for="c2">
                            <span></span>
                            Другой вопрос
                        </label>
                    </div>
                    <div class="check check1"><input type="checkbox" id="c3" name="c2" checked required>
                        <label for="c3">
                            <span></span>
                            Согласие на обработку ваших персональных данных
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<footer>
    <div class="container">
        <div class="logo2">
            <a href="/"><img src="<?='/local/templates/'.SITE_TEMPLATE_ID.'/'?>images/logo2.svg" alt="Индиго"></a>
            <span>Дезинфекторы и моющие средства</span>
        </div>
        <a href="#polit" class="footer-polit">Политика <br>конфиденциальности</a>
        <a href="tel:8 (800) 600-72-30" class="footer-phone">8 (800) 600-72-30</a>
        <div class="footer-social">
            <a href="https://vk.com/indigo_dis" class="vk" target="_blank"></a>
            <a href="https://instagram.com/indigo.rus" class="in" target="_blank"></a>
            <a href="#win" class="wa" target="_blank"></a>
        </div>
        <ul class="footer-menu">
            <li>
                <a href="#win">Каталог</a>
            </li>
            <li>
                <a href="#win">Сферы применения</a>
            </li>
            <li>
                <a href="#win">Новости и акции</a>
            </li>
            <li>
                <a href="#win">Где купить</a>
            </li>
            <li>
                <a href="#win">Контакты</a>
            </li>
        </ul>
    </div>
</footer>

<a href="#x" class="overlay" id="polit"></a>
<div class="popup1">
    <a href="#close" class="close"></a>
    <div class="polit-wrap">
        <div class="popup-title">Политика конфиденциальности</div>
        <p>Администрация сайта (далее Сайт) с уважением относится к правам посетителей Сайта. Мы безоговорочно признаем
            важность конфиденциальности личной информации посетителей Сайта. Данная страница содержит сведения о том,
            какую информацию мы получаем и собираем, когда Вы пользуетесь Сайтом. Мы надеемся, что эти сведения помогут
            Вам принять осознанное решение в отношении предоставляемой нам личной информации. Настоящая Политика
            конфиденциальности распространяется только на Сайт и информацию, собираемую данным сайтом и посредством
            него. Она не распространяется ни на какие другие сайты и не применима к веб-сайтам третьих лиц, которые
            могут ссылаться на данный Сайт.</p>
        <p>Сведения, которые мы получаем на Сайте, могут быть использованы только для того, чтобы облегчить Вам
            пользование Сайтом. Сайт собирает только личную информацию, которую Вы предоставляете добровольно при
            посещении или регистрации на Сайте. Понятие "личная информация" включает информацию, которая определяет Вас
            как конкретное лицо, например, Ваше имя или адрес электронной почты или телефон. Совместное использование
            информации Администрация Сайта ни при каких обстоятельствах не продает и не передает в пользование Вашу
            личную информацию, каким бы то ни было третьим сторонам. Мы также не раскрываем предоставленную Вами личную
            информацию за исключением случаев предусмотренных законодательством РФ.</p>
        <p>Помните, передача информации личного характера при посещении сторонних сайтов, включая сайты
            компаний-партнеров, даже если веб-сайт содержит ссылку на Сайт или на Сайт есть ссылка на эти веб-сайты, не
            подпадает под действия данного документа. Администрация Сайта не несет ответственности за действия других
            веб-сайтов. Процесс сбора и передачи информации личного характера при посещении этих сайтов регламентируется
            документом «Защита информации личного характера» или аналогичным, расположенном на сайтах этих компаний.</p>
    </div>
</div>

<a href="#x" class="overlay" id="call"></a>
<div class="popup2">
    <a href="#close" class="close1"></a>
    <form method="post" id="form2">
        <div class="popup-title">Заказать звонок</div>
        <input name="name" placeholder="Ваше имя">
        <input name="phone" placeholder="Номер телефона" class="in1" required>
        <button>Отправить</button>
        <div class="check1"><input type="checkbox" id="c4" name="c3" checked required>
            <label for="c4">
                <span></span>
                Согласие на обработку ваших персональных данных
            </label>
        </div>
    </form>
</div>

<a href="#x" class="overlay" id="win"></a>
<div class="popup2">
    <a href="#close" class="close1"></a>
    <p>Сайт на реконструкции.<br>По всем вопросам пишите на почту
        <a href="mailto:indigo-med1@mail.ru">indigo-med1@mail.ru</a>
        или звоните по телефону:<br>
        <a href="tel:8 (800) 600-72-30">8 (800) 600-72-30</a>
        <br>
        <span>(бесплатный звонок по РФ).</span>
    </p>
</div>
