<div class="header-content-holder @if (\Request::is('about-us'))
page-about-us
@elseif (\Request::is('purchase-price'))
page-purchase-price
{{-- @elseif (\Request::is('documents'))
    documents --}}
@endif">
    @include('includes.navigation')
    <div class="page-title-holder">
            <h1 class="page-title">
                @if (\Request::is('about-us')) За нас
                @elseif (\Request::is('purchase-price')) Изкупна цена
                @elseif (\Request::is('douments')) Документи
                @elseif (\Request::is('offers')) Обяви
                @elseif (\Request::is('news')) Новини
                @elseif (\Request::is('cntacts')) Контакти
                @endif
            </h1>
    </div>
</div>
