<nav class="navigation" role="navigation">
    <div class="header__logo text-center p-t-sm">Acenda</div>
    <ul class="navigation__list" role="list">
    @foreach($menuList as $name => $url)
        <li class="navigation__item" role="listitem">
            <a class="navigation__item-title" href="{{ $url }}">{{ $name }} </a>
        </li>
    @endforeach
    </ul>
    <div class="navigation__bottom">
        <x-button.social-buttons/>
    </div>
</nav>
