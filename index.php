<!DOCTYPE html>
<html lang="ru">
<?php
    $title = "Путешествия вокруг земли";
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/head.inc.php";
?>

<body>
<?php
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/header.inc.php";
    // print_r($_SERVER);
?>
    <div class="side_nav">
        <a class="side_nav__a" href="#main">Главная</a>
        <a class="side_nav__a" href="#about">О нас</a>
        <a class="side_nav__a" href="#contacts">Контакты</a>
    </div>
    <div class="promo">
        <div class="action">
            <h3 class="action__h3">
                Только красивые путешествия
            </h3>
            <div class="action__btn">
                Присоединиться
            </div>
        </div>
        <div class="soc">
            <a href="https://vk.com" target="blank">
                <div class="soc_icons  soc_icons__vk"></div>
            </a>
            <a href="https://facebook.com" target="blank">
                <div class="soc_icons  soc_icons__face"></div>
            </a>
            <a href="https://instagram.com" target="blank">
                <div class="soc_icons  soc_icons__inst"></div>
            </a>
        </div>
    </div>

<?php
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/info.inc.php";
?>
    <section class="info info__centr">
        <h3 class="info__h3">
            Причины воспользоваться нашими услугами!
        </h3>
        <ul class="info__ul">
            <li>Веселые анимации</li>
            <li> Неплохие номера</li>
            <li> Быстрые самолеты</li>
            <li> Мягкий песок на пляже</li>
        </ul>
    </section>

    <section class="cards" id="about">
        <div class="card animated zoomIn">
            <div class="card__img card__moscow"></div>
            <h3 class="card__h3"> Путешествия по России</h3>
            <div class="card__line"></div>
            <p class="card__p"> Балалайки, матрешки, Кремль</p>
        </div>
        <div class="card animated zoomIn delay-1s">
            <div class="card__img card__london"></div>
            <h3 class="card__h3"> Путешествия по Европе</h3>
            <div class="card__line"></div>
            <p class="card__p"> Разные страны, разные культуры!
                Все самое модное в Европе!
            </p>
        </div>
        <div class="card animated zoomIn delay-2s">
            <div class="card__img card__africa"></div>
            <h3 class="card__h3"> Путешествия по Африке</h3>
            <div class="card__line"></div>
            <p class="card__p"> Классные сафари, быстрые львы и
                неверотные саванны! Все в одном флаконе! Бонус:
                купание с крокодилами
            </p>
        </div>
        <div class="card animated zoomIn delay-3s">
            <div class="card__img card__north"></div>
            <h3 class="card__h3"> Путешествия по Северной Америке</h3>
            <div class="card__line"></div>
            <p class="card__p"> Конечно мы проедем всю Америку,
                и обязательно заедем в Голливуд!
            </p>
        </div>
        <div class="card animated zoomIn delay-4s">
            <div class="card__img card__south"></div>
            <h3 class="card__h3"> Путешествия по Южной Америке!</h3>
            <div class="card__line"></div>
            <p class="card__p"> Южная Америка ждет нас! И там куда безопаснее,
                чем в американских фильмах!
            </p>
        </div>
        <div class="card animated zoomIn delay-5s">
            <div class="card__img card__australia"></div>
            <h3 class="card__h3"> Путешествия по Австралии</h3>
            <div class="card__line"></div>
            <p class="card__p">
                Австралия, кенгуру, летающих пауков там нет! Или есть.
                Приезжайте и проверьте сами
            </p>
        </div>
    </section>
    <section class="form_wrapper animated">
        <h3 class="form__h3"> Оставьте заявку </h3>
        <span class="error_message">  </span>

        <form action="post.php" method="GET">
            <label for="name"> Ваше имя</label>
            <input type="text" name="name" placeholder="ваше имя"  minlength="2" maxlength="16">

            <label for="surname"> Ваша фамилия</label>
            <input type="text" name="surname" placeholder="ваша фамилия"  minlength="2" maxlength="16">

            <label for="telephone"> Ваш телефон</label>
            <input type="tel" name="telephone" placeholder="ваш телефон"  minlength="7" minlength="13">
            <label for="message"> Ваше сообщение</label>
            <textarea name="message" cols="38" rows="5" placeholder="ваше сообщение"></textarea>
            <button type="submit"> Отправить </button>

            <div class="ck_warning__cross form__cross">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            
        </form>

    </section>

    <div class="faq_wrapper">
        <div class="faq__panel">
            <div class="faq__panel__quest">
                <i class=" fas fa-angle-up"></i>
                Сколько за тур?
            </div>
            <div class="faq__panel__answer">
                Недорого. В дороге накормим
            </div>
        </div>
        <div class="faq__panel">
            <div class="faq__panel__quest">
                    <i class="fas fa-angle-up"></i>
                Сколько стоит виза?
            </div>
            <div class="faq__panel__answer">
               Зачем виза? Мы так провезем
            </div>
        </div>
        <div class="faq__panel">
            <div class="faq__panel__quest">
                    <i class="fas fa-angle-up"></i>
                Можно ли полетать на воздушном шаре
            </div>
            <div class="faq__panel__answer">
                Можно, но недолго и невысоко
            </div>
        </div>
    </div>
    <footer id="contacts">
        <div class="footer_wrap">
            <div class="contacts">
                <h5 class="contacts__h5 contacts__orange"> Мы рядом с вами </h5>
                <p class="contacts__p contacts__orange"> Москва, ул. Героев Труда, 6</p>
                <p class="contacts__p"> Тел: 8(499)-183-77-77</p>
                <p class="contacts__p"> Email: edu@travel.ru </p>
                <p class="contacts__p"> Часы работы: пн-пт 10-13 </p>
            </div>
            <div class="soc">
                <a href="https://vk.com" target="blank">
                    <div class="soc_icons  soc_icons__vk"></div>
                </a>
                <a href="https://facebook.com" target="blank">
                    <div class="soc_icons  soc_icons__face"></div>
                </a>
                <a href="https://instagram.com" target="blank">
                    <div class="soc_icons  soc_icons__inst"></div>
                </a>
            </div>
        </div>
        <div class="ck_warning">
            <h3 class="ck_warning__h3">
                мы используем куки,
                следим за вами
            </h3>
            <div class="ck_warning__cross">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
        <div class="footer__logo"> </div>
        <ul class="footer__ul">
            <li> Путешествия по Украине</li>
            <li> Путешествия по Китаю</li>
            <li> Путешествия по Финляндии</li>
            <li> Путешествия по Норвегии</li>
            <li> Путешествия по Швеции</li>
        </ul>
    </footer>
</body>

</html>