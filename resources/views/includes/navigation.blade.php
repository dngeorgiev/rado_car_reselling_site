<div class="navigation-holder">
    <nav class="navbar navbar-expand-lg custom-navbar">
        <a class="navbar-brand custom-navbar-brand" href="\">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse custom-navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="{{ Request::is('/') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href="{{ route('home') }}">Начало</a>
                <a class="{{ Request::is('about-us') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href={{ route('about-us') }}>За нас</a>
                <a class="{{ Request::is('purchase-price') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href="{{ route('purchase-price') }}">Изкупна цена</a>
                <a class="{{ Request::is('documents') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href="{{ route('documents') }}">Документи</a>
                <a class="{{ Request::is('offers') || Request::is('offers/1') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href="{{ route('offers') }}">Обяви</a>
                <a class="{{ Request::is('news') || Request::is('news/1') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href="{{ route('news') }}">Новини</a>
                <a class="{{ Request::is('contacts') ? 'active' : '' }} nav-item nav-link custom-nav-link"
                    href="{{ route('contacts') }}">Контакти</a>
            </div>
        </div>
    </nav>
</div>
