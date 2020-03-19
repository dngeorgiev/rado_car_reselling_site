<div class="header-content-holder @if (\Request::is('about-us'))
page-about-us
@elseif (\Request::is('purchase-price'))
page-purchase-price
@elseif (\Request::is('documents'))
page-documents
@elseif (\Request::is('offers') || \Request::is('offers/1'))
page-offers
@elseif (\Request::is('news') || \Request::is('news/1'))
page-news
@elseif (\Request::is('contacts'))
page-contacts
@endif">
    @include('includes.navigation')
    <div class="page-title-holder">
        <h1 class="page-title">
            @if (\Request::is('about-us')) За нас
            @elseif (\Request::is('purchase-price')) Изкупна цена
            @elseif (\Request::is('documents')) Нужни документи
            @elseif (\Request::is('offers')) Обяви
            @elseif (\Request::is('offers/1')) Обявa №1
            @elseif (\Request::is('news')) Новини
            @elseif (\Request::is('news/1')) Името на новината бла бла бла
            @elseif (\Request::is('contacts')) Контакти
            @endif
        </h1>
    </div>
</div>
