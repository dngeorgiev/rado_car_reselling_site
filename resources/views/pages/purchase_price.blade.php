@extends('layouts.app')

@section('header')
    @include('includes.secondary_header')
@endsection

@section('content')
    <section id="purchase-price-intro-box">
        <div class="container">
            <div class="purchase-price-box-text">
                Имаме само <span class="text-orange text-uppercase text-italic text-bold">две изисквания</span> <br> и <span class="text-orange text-uppercase text-italic text-bold">три лесни стъпки</span>
            </div>
        </div>
    </section>
    <div class="container">
        <section id="purchase-price">
            <div class="section-inner">
                <h2 class="title">
                    Две изисквания
                </h2>
                <div class="custom-list-holder">
                    <ul class="custom-ul">
                        <li>
                            <span class="list-icon">
                                <i class="far fa-hand-point-right"></i>
                            </span>
                            <span class="text">Колата, която желаете да изкупим, да е производство след 1999 година (4х4 след 1993 година)</span>
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
            <div class="section-inner">
                <h2 class="title">
                    Три лесни стъпки
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
                                    Ние намираме петте обяви на идентични коли с най-ниски цени, същите технически показатели,
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
        </section>
    </div>
    <section id="online-evaluation">
        <div class="container">
            <h2 class="title">
                Онлайн оценка (за Варненска област)
            </h2>
            @include('includes.evaluation_form')
        </div>
    </section>

@endsection

