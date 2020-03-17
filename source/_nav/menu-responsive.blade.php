<nav id="js-nav-menu" class="nav-menu hidden lg:hidden z-10 ml-2 mr-2">
    <ul class="my-0 list-none">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Articoli</a>
        </li>

        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >Il Gruppo</a>
        </li>

        <li class="pl-4">
            <a
                title="Incontri"
                href="https://www.meetup.com/it-IT/pug-rovigo/"
                class="nav-menu__item hover:text-blue-500"
            >Incontri</a>
        </li>        
    </ul>
</nav>
