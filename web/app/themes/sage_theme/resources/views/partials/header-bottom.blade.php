<div class="header__bottom">
  <a class="logo__link" href="/" title="Фабрика носков">
    @include('icons::logo')
  </a>

  <div class="menu-1__container">
    <ul id="menu-menu-1" class="menu-navigation menu_inline">
      <li class="menu-item"><a class="menu__item-link" href="/magazin">Магазин</a></li>
      <li class="menu-item menu-item_with-children"><a class="menu__item-link" href="/zhenskoe">Женские</a>
        <ul class="sub-menu">
          <li class="menu-item"><a class="menu__item-link" href="/zhenskoe/zhenskie-kolgotki/">Женские колготки</a></li>
          <li class="menu-item menu-item_with-children"><a class="menu__item-link" href="/zhenskoe/zhenskie-noski/">Женские носки</a>
            <ul class="sub-menu">
              <li class="menu-item"><a class="menu__item-link" href="/zhenskoe/zhenskie-noski/zhenskie-noski-so-sportivnoj-rezinkoj/">Женские носки с резинкой</a></li>
              <li class="menu-item"><a class="menu__item-link" href="/zhenskoe/zhenskie-noski/zhenskie-sherstjanye-noski/">Женские шерстяные носки</a></li>
            </ul>
          </li>
          <li class="menu-item"><a class="menu__item-link" href="/zhenskoe/zhenskie-chulki">Женские чулки</a></li>
          <li class="menu-item"><a class="menu__item-link" href="/zhenskoe/zhenskie-poluchulki">Женские получулки</a></li>
        </ul>
      </li>
      <li class="menu-item menu-item_with-children"><a class="menu__item-link" href="/muzhskoe">Мужские</a>
        <ul class="sub-menu">
          <li class="menu-item menu-item_with-children "><a class="menu__item-link" href="/muzhskoe/muzhskie-noski/">Мужские носки</a>
            <ul class="sub-menu">
              <li class="menu-item"><a class="menu__item-link" href="/muzhskoe/muzhskie-noski/muzhskie-sherstjanye-noski/">Мужские шерстяные носки</a></li>
              <li class="menu-item"><a class="menu__item-link" href="/muzhskoe/muzhskie-noski/muzhskie-noski-so-sportivnoj-rezinkoj/">Мужские носки с резинкой</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item menu-item_with-children"><a class="menu__item-link" href="/detskoe">Детские</a>
        <ul class="sub-menu">
          <li class="menu-item"><a class="menu__item-link" href="/detskoe/detskie-kolgotki">Детские колготки</a></li>
          <li class="menu-item"><a class="menu__item-link" href="/detskoe/detskie-noski">Детские носки</a></li>
        </ul>
      </li>
      <li class="menu-item"><a class="menu__item-link" href="/detskoe/dlja-malyshej/">Для малышей</a></li>
      <li class="menu-item"><a class="menu__item-link" href="/na-zakaz">На заказ</a></li>
      <li class="menu-item"><a class="menu__item-link" href="/kontakty">Контакты</a></li>
    </ul></div>

  <div class="panel">
    <div class="panel__items">
      <div class="panel__item panel__item_search">
        <a class="panel__search panel__link" data-popup="main-search" href="#">
          <i class="panel__icon">
            @include('icons::search')
          </i>
        </a>
      </div>
      <div class="panel__item">
        <a class="panel__wishlist panel__link" href="https://www.fabrikanoskov.ru/wishlist/">
          <i class="panel__icon">
            @include('icons::favorite')
          </i>
        </a>
      </div>
      <div class="panel__item">
        <a class="panel__account panel__link" href="https://www.fabrikanoskov.ru/akkaunt/">
          <i class="panel__icon">
            @include('icons::account')
          </i>
          <div class="panel__notice text">
            Войти / Зарегистрироваться
          </div>
        </a>
      </div>
      <div class="panel__item">
        <a class="panel__cart panel__link" href="https://www.fabrikanoskov.ru/korzina/">
          <i class="panel__icon">
            @include('icons::basket')
          </i>
        </a>
      </div>
    </div>
  </div>
</div>
