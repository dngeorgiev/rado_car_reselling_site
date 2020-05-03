@extends('layouts.app')

@section('header')
@include('includes.main_header')
@endsection

@section('content')
<section id="purpose-intro-box">
    <div class="container">
        <p class="intro-box-text">Когато изкупуваме Вашия автомобил, ние правим <span
                class="text-uppercase text-orange text-italic">всичко възможно</span>, за да получите <span>най-добрата
                ценова оферта</span> за бърза продажба</p>
    </div>
</section>

<section id="main-page-about-us">
    <div class="container">
        <div class="section-inner">
            <h2 class="title">
                Ние сме различни
            </h2>

            <p class="text">
                Когато Ви предлагаме услугите си, ние правим това по малко по – различен от общоприетия начин.
                Идеята в нашия бизнес е да осигурим бързо изкупуване на Вашия автомобил. Това става възможно с
                прилагането на няколко лесни стъпки, които улесняват и Вас и нас, защото времето е ценно за всички ни.
            </p>

            <div class="custom-list-holder">
                <ul class="custom-ul">
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Изкупуваме автомобила Ви веднага</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Не губите време</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Плащаме Ви за него на момента</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Не се налага да чакате, за да получите парите за колата си</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Идваме да го вземем от местонахождението му</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Имате възможност да вършите други, важни за Вас неща</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section-inner">
            <h2 class="title">
                Но защо избираме точно този модел?
            </h2>

            <p class="text">Защото...</p>

            <div class="custom-list-holder">
                <ul class="custom-ul">
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Постоянно следим пазара и имаме поглед върху ценовото движение</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Позволява да спестим Вашето време</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Е бърз и лесен начин да се определи цената на даден автомобил</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Осигурява прозрачност и Вие също можете да направите проверка</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="fas fa-circle-notch"></i>
                        </span>
                        <span class="text">Изкупуването на автомобили става бързо, изкупените коли са оценени.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="requirements-box">
        <div class="container">
            <h2 class="requirements-title">
                Имаме само <span class="text-orange">две изисквания</span> към Вас:
            </h2>

            <div class="custom-list-holder">
                <ul class="custom-ul">
                    <li>
                        <span class="list-icon">
                            <i class="far fa-hand-point-right"></i>
                        </span>
                        <span class="text">Колата, която желаете да изкупим, да е производство след 1999 година (4х4
                            след 1993 година)</span>
                    </li>
                    <li>
                        <span class="list-icon">
                            <i class="far fa-hand-point-right"></i>
                        </span>
                        <span class="text">Колата да е цяла</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-inner">
            <h2 class="title">
                Ние сме различни
            </h2>

            <div class="purchase-price-cards-holder">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="price-card">
                            <div class="price-number">1</div>
                            <p class="price-text">
                                Попълвате онлайн формата по-долу за оценка на автомобила
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="price-card">
                            <div class="price-number">2</div>
                            <p class="price-text">
                                Ние намираме петте обяви на идентични коли с най-ниски цени, същите технически
                                показатели,
                                година и модел като вашия автомобил
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="price-card">
                            <div class="price-number">3</div>
                            <p class="price-text">
                                Изкупната цена е равна на 70% от средно аритметичната стойност на 5-те автомобила
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="online-evaluation">
    <div class="container">
        <h2 class="title">
            Онлайн оценка (за Варненска област)
        </h2>
        @include('includes.evaluation_form')
    </div>
</section>

@endsection
