<div class="header-content-holder @if (\Request::is('about-us'))
page-about-us
@elseif (\Request::is('purchase-price'))
page-purchase-price
@elseif (\Request::is('documents'))
page-documents
@elseif (\Request::is('offers'))
page-offers
@elseif (\Request::is('news'))
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
            @elseif (\Request::is('news')) Новини
            @elseif (\Request::is('cntacts')) Контакти
            @endif
        </h1>
    </div>
</div>
