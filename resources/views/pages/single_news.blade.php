@extends('layouts.app')

@section('header')
@include('includes.secondary_header')
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-text">
            <a href="{{ route('news') }}"> Новини </a> > Името на новината
        </div>
    </div>
</div>

<section id="single-news">
    <div class="container">
        <div class="secondary-title">
            <h2>Заглавие на новината</h2>
            <div class="inner-secondary-title news">
                <span>Admin</span>
                <span>12/11/2019</span>
            </div>
        </div>

        <div class="news-content">
            <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis viverra rhoncus.
                Suspendisse potenti. Nullam finibus sagittis metus, ut dictum nisi porta id. Vivamus a purus convallis,
                rhoncus ante id, auctor augue. Nulla aliquam purus in viverra egestas. Quisque eget libero efficitur,
                mattis tellus quis, ultrices sapien. Duis porttitor leo libero, eu tristique tellus ultricies id.
                Integer varius, nulla sit amet consequat elementum, dolor risus egestas ex, et consectetur leo erat id
                augue.
                Duis vitae lorem est. Vivamus sodales rutrum est id tempus. Aliquam dui nisi, egestas sit amet metus
                non,
                condimentum scelerisque turpis. Duis consequat nisl sapien, eu vestibulum dolor malesuada ut.
                Morbi non semper odio, id ullamcorper elit. Curabitur a nisi et ipsum commodo aliquam.
            </p>

            <p class="text">
                Etiam venenatis venenatis suscipit. Pellentesque malesuada odio ac aliquam venenatis.
                Donec malesuada felis sit amet ultricies tincidunt. In ac urna id tortor ultrices tincidunt.
                Proin mattis sollicitudin quam vitae molestie. Praesent maximus et felis in varius.
                Morbi faucibus ex consectetur nisi congue varius. Nullam commodo laoreet placerat.
                Nulla ut neque tincidunt, venenatis augue at, imperdiet augue. Integer consectetur,
                felis nec dapibus vulputate, urna leo efficitur sapien, in ultrices orci magna nec nisi.
                Aliquam erat volutpat. Quisque vel mi ac dolor sagittis semper a ut metus. Duis a pretium massa.
                Morbi posuere pulvinar vestibulum. Cras tempus laoreet libero, tempus lacinia quam. Phasellus quis
                viverra nibh.
            </p>
        </div>

        <div class="gallery">
            <div class="title">
                Галерия
            </div>
            <div class="row">
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-3">
                    <a class="gallery-img" data-fancybox="gallery"
                        href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="single-news-comments">
    <div class="container">
        <h2 class="title">
            Вашият коментар
        </h2>

        <div class="comment-holder">
            <div class="comment-info">
                <div class="user-datetime-holder">
                    <div class="user">Стоян Стоянов</div>
                    <div class="datetime">
                        <span>12/12/2019</span> &bull; <span>12:26</span>
                    </div>
                </div>
                <button class="btn secondary-btn respond-btn">
                    Отговори
                </button>
            </div>

            <div class="comment-content">
                <p>
                    Здравейте, да Ви кажа от личен опит, когато на човек му се повреди колата или мотоциклета
                    и не му се занимава да го оправя, остава му само да го върне за скрап или да го предложи за
                    изкупуване.
                    Това, че момчетата идват на място да направят оценка на автомобила и да предложат цена за изкупуване
                    на колата си е удобство. Аз имам освен автомобила, един стар мотор – 93-та година, който седи и ми
                    трупа данъци вече 4-5 години. По 120 лева на година и сега ще стане така, че като го продам,
                    голяма част от изкупната му цена ще отиде за данъци.. Ако се бях сетил по-рано да го пусна него или
                    колата за изкупуване, щях да спестя доста от данъци…
                </p>
            </div>

            <div class="reply">
                <div class="comment-info">
                    <div class="user-datetime-holder">
                        <div class="user">Admin</div>
                        <div class="datetime">
                            <span>12/12/2019</span> &bull; <span>12:55</span>
                        </div>
                    </div>
                </div>

                <div class="comment-content">
                    <p>
                        Да, така е. Често пъти собствениците на автомобилите ги държат толкова дълго, че сумата за
                        плащане
                        на данъците става голяма и изяжда голяма част от изкупната цена на автомобила. Затова ние от
                        IZKUPUVAM.BG даваме оценка и плащаме веднага! Така собственици те губят средства и могат да
                        пренасочат
                        средствата в друга посока.

                        Оценката и изкупуването на кола става ВЕДНАГА!
                    </p>
                </div>
            </div>
        </div>

        <div class="comment-holder">
            <div class="comment-info">
                <div class="user-datetime-holder">
                    <div class="user">Йордан Балинов</div>
                    <div class="datetime">
                        <span>13/12/2019</span> &bull; <span>09:12</span>
                    </div>
                </div>
                <button class="btn secondary-btn respond-btn">
                    Отговори
                </button>
            </div>

            <div class="comment-content">
                <p>
                    Здравейте, до колко време горе-долу се осъществява изкупуването на автомобил? Колата ми е във Варна,
                    в движение и искам да я продам възможно най-скоро. Можете ли да ме ориентирате до колко време
                    бихте могли да изкупите автомобила?
                </p>
            </div>

            <div class="reply">
                <div class="comment-info">
                    <div class="user-datetime-holder">
                        <div class="user">Admin</div>
                        <div class="datetime">
                            <span>13/12/2019</span> &bull; <span>10:30</span>
                        </div>
                    </div>
                </div>

                <div class="comment-content">
                    <p>
                        Здравейте Йордан. Изкупуването на автомобил може да се осъшестви в рамките на дни.
                        За целта можете да се свържете с нас на тел. номер 0885111115 или да попълните формата
                        ни за онлайн оценка на автомобили.

                        Ако желаете, във формата за оценка можете да качите и снимка на автомобила, който желаете да
                        изкупим.
                        ( Не е задължително. )

                        Поздрави.
                    </p>
                </div>
            </div>
        </div>

        <div class="comment-holder">
            <div class="comment-info">
                <div class="user-datetime-holder">
                    <div class="user">Йордан Балинов</div>
                    <div class="datetime">
                        <span>13/12/2019</span> &bull; <span>09:12</span>
                    </div>
                </div>
                <button class="btn secondary-btn respond-btn">
                    Отговори
                </button>
            </div>

            <div class="comment-content">
                <p>
                    Здравейте, да Ви кажа от личен опит, когато на човек му се повреди колата или мотоциклета и не му
                    се занимава да го оправя, остава му само да го върне за скрап или да го предложи за изкупуване.
                    Това, че момчетата идват на място да направят оценка на автомобила и да предложат цена за изкупуване
                    на колата си е удобство. Аз имам освен автомобила, един стар мотор – 93-та година, който седи и ми
                    трупа
                    данъци вече 4-5 години. По 120 лева на година и сега ще стане така, че като го продам, голяма част
                    от изкупната му цена ще отиде за данъци.. Ако се бях сетил по-рано да го пусна него или колата за
                    изкупуване, щях да спестя доста от данъци…
                </p>
            </div>
        </div>
    </div>
</section>

<section id="add-comment">
    <div class="container">
        <h2 class="title">
            Вашият коментар
        </h2>
        <form action="" id="comment-form">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6 mb-4">
                    <label for="name" class="custom-input">Име *</label>
                    <input type="text" id="name" name="name" />
                </div>
                <div class="col-12 col-sm-6 mb-4">
                    <label for="email" class="custom-input">Email *</label>
                    <input type="email" id="email" name="email" />
                </div>
                <div class="col-12">
                    <label for="comment" class="fl-label">Вашият коментар *</label>
                    <textarea id="comment" name="comment" spellcheck="false"></textarea>
                </div>
                <input type="hidden" name="comment-ref" value="">
            </div>

            <div class="btn-holder">
                <button class="btn primary-btn">Публикуване</button>
            </div>
        </form>
    </div>
</section>
@endsection
