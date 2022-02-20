<link href="style.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="./css/chosen.min.css">
<link href="./css/lk-styles.css" rel="stylesheet" />
<div class="wrapper">
  <section class="lk">
    <!--header start-->
    <header class="header">
      <div class="header__block1">
        <a href="/" class="headerLink">ZAYAVKI-TUT.RU</a>
        <p class="headerTextNote">Маркетинговая поддержка</p>
      </div>
      <div class="header__block2">
        <a href="tel:+79135928565" class="headerPhone">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M13.7964 9.84578C12.878 9.84578 11.9763 9.70215 11.1218 9.41977C10.7031 9.27695 10.1884 9.40797 9.93283 9.67043L8.24623 10.9436C6.29026 9.89953 5.08542 8.69508 4.05558 6.75379L5.29131 5.11113C5.61237 4.79051 5.72752 4.32215 5.58956 3.8827C5.30596 3.02371 5.1619 2.12242 5.1619 1.20367C5.16194 0.539961 4.62198 0 3.95831 0H1.20363C0.53996 0 0 0.539961 0 1.20363C0 8.81105 6.18897 15 13.7964 15C14.46 15 15 14.46 15 13.7964V11.0494C15 10.3857 14.46 9.84578 13.7964 9.84578Z" />
          </svg>
          +7 (913) 592 85 65
        </a>
        <div class="schedule">C 09:00 - 20:00 (Пн-Пт)</div>
      </div>
      <div class="header__block3">
        <a class="btnRegistration" href="/registration/">Зарегистрироваться</a>
      </div>
      <div class="header__block4">
        <button class="btnSignIn jsBtnSignIn" type="button">Войти в личный кабинет</button>
      </div>
    </header>
    <!--header end-->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="lk-top-line"></div>
        </div>
        <div class="col-lg-5">
          <div class="requests">
            <p class="requests__title">Заявки</p>
            <p class="requests__text">Здесь вы можете приобрести заявки (текстовые и звонки) и работать с ними. Чтобы
              получать заявки первыми, мы рекомендуем делать предзаказ. Приобрести заявку возможно только при
              положительном балансе. </p>
            <div class="requests__block d-flex justify-content-between align-items-center">
              <p>Закончились средства на счету, заявки не поступают </p>
              <a href="#" class="btn">Пополнить счёт</a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="statistics">
            <div class="statistics__bg">
              <div class="statistics__content">
                <div class="statistics__item d-flex align-items-center">
                  <div class="count">0</div>
                  <p class="text">рублей на счету </p>
                  <a href="#" class="btn">Пополнить счёт</a>
                </div>
                <div class="statistics__item d-flex align-items-center">
                  <div class="count">0</div>
                  <p class="text">текстовых заявок куплено </p>
                  <a href="#" class="btn"> Заказать</a>
                </div>
                <div class="statistics__item d-flex align-items-center">
                  <div class="count">0</div>
                  <p class="text">звонков куплено </p>
                  <a href="#" class="btn"> Заказать</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="my-requests">
            <p class="my-requests__title">Мои заявки</p>
            <div class="my-requests__container">
              <div class="region d-flex align-items-center">
                <p>Регион: </p>
                <select class="js-chosen" name="city" placeholder="Выберите город">
                  <option value=""></option>
                  <option value="367">Москва</option>
                  <option value="340">Санкт-Петербург</option>
                  <option value="369">Казань</option>
                  <option value="370">Челябинск</option>
                  <option value="371">Тверь</option>
                  <option value="372">Магнитогорск</Магнитогорск>
                </select>
              </div>
              <div class="date d-flex align-items-center">
              <p>Дата: </p>
              <input type="date">
              <span></span>
              <input type="date">
              </div>
              <div class="size d-flex align-items-center">
                <p>Записей на странице</p>
                <select>
                  <option>10</option>
                  <option>20</option>
                  <option>30</option>
                  <option>40</option>
                  <option>50</option>
                  <option selected>100</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="request-item">
            <div class="request-item__number">1</div>
            <div class="request-item__credits d-flex">
              <div class="price with-bg d-flex align-items-center">
                <p class="numb d-flex align-items-end">115 <span>руб</span></p>
                <p class="m-3">Стоимость заявки</p>
              </div>
              <div class="scope">Исполнительное производство</div>
              <div class="status with-bg">Заявка <br>активна</div>
            </div>
            <p class="request-item__text">Не следует, однако забывать, что дальнейшее развитие различных форм
              деятельности обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
              Повседневная практика показывает, что начало повседневной работы по формированию позиции требуют
              определения и уточнения форм развития. Разнообразный и богатый опыт укрепление и развитие структуры
              обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.
              Задача организации, в особенности же реализация</p>
            <p class="request-item__info mb-3">Дивногорск, 28 Апреля 11:04</p>
            <p class="request-item__info">Имя: <span>Виктор</span></p>
            <p class="request-item__info">Телефон: <span>+7 (908) 203-01 -73</span></p>
            <div class="request-item__comment d-flex">
              <textarea placeholder="Оставить комментарий"></textarea>
              <div class="btns">
                <button class="btn send">Оставить комментарий </button>
                <a href="#" class="btn open">Открыть заявку</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <script src="./jquery-3.6.0.min.js"></script>
  <script src="./chosen.jquery.js"></script>

  <script>
    $(document).ready(function () {
      $('.js-chosen').chosen({
        width: '100%',
        no_results_text: 'Совпадений не найдено',
        placeholder_text_single: 'Выберите город'
      });
    });
  </script>



















  <!--footer start-->
  <div class="sectionFooter">
    <div class="footer">
      <div class="footer__block1">
        <a href="/" class="footerLink">ZAYAVKI-TUT.RU</a>
        <p class="footerTextNote">Маркетинговая поддержка</p>
      </div>
      <div class="footer__block2">
        <div class="footerTitle">ТЕЛЕФОН</div>
        <div>
          <a href="tel:+79135928565" class="footerPhone" title="Позвонить">+7 (913) 592 85 65</a>
        </div>
      </div>
      <div class="footer__block3">
        <div class="footerTitle">УСЛУГИ</div>
        <p class="footerTextNote2">Предоставляем заявки на юридические услуги</p>
        <p class="footerTextNote2">Стоимость от 150₽ за заявку</p>
      </div>
      <div class="footer__block4">
        <div class="footerTitle">О компании</div>
        <ul class="footerMenu">
          <li class="footerMenu__item">
            <a href="#" class="footerMenu__link">Контакты</a>
          </li>
          <li class="footerMenu__item">
            <a href="#" class="footerMenu__link">Политика конфиденциальности </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--footer end-->
  <div class="bgModalWindow"></div>
  <div class="wrapMw wrapMw_app" data-modal>
    <div class="modalWindow">
      <div class="modalWindow__header">
        <button type="button" class="modalWindow__btnClose jsBtnMwClose">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 1L1 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1 1L14 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
      <div class="modalWindow__block">
        <form action="/" class="formCall" method="post" name="formHowItWorksMw" data-title="Бесплатная консультация"
          data-event_name="FEEDBACK_FORM_CALL" data-lid="<?=SITE_ID?>">
          <input type="text" hidden name="trap">
          <div class="formCall__title">Заполните форму, чтобы получить <b>бесплатную консультацию</b></div>
          <div class="formCall__block1">
            <div class="formCall__field formCall__field_name">
              <input class="formCall__input" type="text" name="username" placeholder="Ваше имя"
                data-placeholder="Ваше имя" data-required="ru">
            </div>
          </div>
          <div class="formCall__block2">
            <div class="formCall__field formCall__field_phone">
              <input class="formCall__input jsUserphone" type="text" name="userphone" placeholder="Ваш телефон"
                data-placeholder="Ваш телефон" data-required="ru">
            </div>
          </div>
          <div class="formCall__block3">
            <div class="privacyPolicy">
              <div class="privacyPolicy__inner">
                <input class="privacyPolicy__checkbox jsPrivacyPolicy" id="privacyPolicy_formCallMw" type="checkbox"
                  name="privacypolicy">
                <label class="privacyPolicy__label" for="privacyPolicy_formCallMw"></label>
              </div>
              <div class="privacyPolicy__text">Нажимая на кнопку, вы даете согласие на <a class="privacyPolicy__link"
                  href="/polzovatelskoe-soglashenie/">обработку персональных данных</a></div>
            </div>
          </div>
          <div class="formCall__block4">
            <a class="form__btnRegistration" href="/registration/">Зарегистрироваться</a>
            <button class="form__btnSend jsSendForm" type="button" disabled="disabled">Заказать звонок</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="wrapMw wrapMw_auth" data-modal>
    <div class="modalWindow">
      <div class="modalWindow__header">
        <button type="button" class="modalWindow__btnClose jsBtnMwClose">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 1L1 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1 1L14 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
      <div class="modalWindow__block">
        <form name="form_auth" method="post" target="_top" action="<?= $arResult[" AUTH_URL"] ?>" class="formCall"
          method="post">
          <input type="hidden" name="AUTH_FORM" value="Y">
          <input type="hidden" name="TYPE" value="AUTH">
          <? if (strlen($arResult["BACKURL"]) > 0): ?>
          <input type="hidden" name="backurl" value="<?= $arResult[" BACKURL"] ?>"/>
          <? endif ?>
          <div class="formCall__title">Вход в <strong>личный кабинет</strong></div>
          <div class="formCall__block1">
            <div class="formCall__field formCall__field_name">
              <input class="formCall__input" type="email" name="USER_LOGIN" placeholder="Логин (email)">
            </div>
          </div>
          <div class="formCall__block2">
            <div class="formCall__field formCall__field_password">
              <input class="formCall__input" type="password" name="USER_PASSWORD" placeholder="Пароль">
            </div>
          </div>
          <div class="formCall__block4">
            <button class="form__btnSend" type="submit">Войти</button>
          </div>
          <div class="formCall__block5">
            <p class="formCall__forgot">Забыли пароль? <a class="formCall__link"
                href="/registration/forgot.php">Восстановить</a></p>
            <p class="formCall__registration">Нет аккаунта? <a class="formCall__link"
                href="/registration/">Зарегистрируйтесь</a></p>
          </div>
          <?ShowMessage($arParams["~AUTH_RESULT"]);
                        ShowMessage($arResult['ERROR_MESSAGE']);?>

        </form>
      </div>
    </div>
  </div>
  <div class="wrapMw wrapMw_thank" data-modal>
    <div class="modalWindow">
      <div class="modalWindow__header">
        <button type="button" class="modalWindow__btnClose jsBtnMwClose">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 1L1 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1 1L14 14" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
      </div>
      <div class="modalWindow__block">
        <div class="formCall__thank">
          <p>Сообщение отправлено.</p>
          <p>В ближайщее время менеджер свяжется с вами.</p>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="script.js"></script>