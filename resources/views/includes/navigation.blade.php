<div class="navigation-holder">
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a class="navbar-brand custom-navbar-brand" href="\">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse custom-navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="{{ Request::is('/') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="\">Начало</a>
            <a class="{{ Request::is('about-us') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="about-us">За нас</a>
            <a class="{{ Request::is('purchase-price') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="purchase-price">Изкупна цена</a>
            <a class="{{ Request::is('documents') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="documents">Документи</a>
            <a class="{{ Request::is('offers') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="offers">Обяви</a>
            <a class="{{ Request::is('news') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="news">Новини</a>
            <a class="{{ Request::is('contacts') ? 'active' : '' }} nav-item nav-link custom-nav-link" href="contacts">Контакти</a>
          </div>
        </div>
    </nav>
</div>
