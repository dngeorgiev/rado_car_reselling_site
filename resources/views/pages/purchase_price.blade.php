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
                        <div class="col-4">
                            <div class="price-card">
                                <div class="price-number">1</div>
                                <p class="price-text">
                                    Попълвате онлайн формата по-долу за оценка на автомобила
                                </p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="price-card">
                                <div class="price-number">2</div>
                                <p class="price-text">
                                    Ние намираме петте обяви на идентични коли с най-ниски цени, същите технически показатели,
                                    година и модел като вашия автомобил
                                </p>
                            </div>
                        </div>

                        <div class="col-4">
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
            <form action="" id="online-evaluation-form">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-4 mb-4">
                        <label for="name" class="custom-input">Вашият глад *</label>
                        <input type="text" id="name" name="name" />
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <label for="phone" class="custom-input">Телефон за връзка *</label>
                        <input type="tel" id="phone" name="phone" />
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" />
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <label for="make" class="custom-input">Марка</label>
                        <input type="text" id="make" name="make" />
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <label for="model" class="custom-input">Модел</label>
                        <input type="text" id="model" name="model" />
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <label for="body_style">Купе</label>
                        <select id="body_style">
                            <option value="1">Седан</option>
                            <option value="2">Хечбек</option>
                            <option value="3">Комби</option>
                            <option value="4">Купе</option>
                            <option value="5">Кабрио</option>
                            <option value="6">Джип</option>
                            <option value="7">Пикап</option>
                            <option value="8">Ван</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-4">
                        <label for="engine">Двигател</label>
                        <input type="text" id="engine" name="engine" />
                    </div>
                    <div class="col-12 col-sm-4">
                        <label for="transmission" class="custom-input">Скорости</label>
                        <input type="text" id="transmission" name="transmission" />
                    </div>
                    <div class="col-12 col-sm-4">
                        <label for="price" class="custom-input">Желана цена</label>
                        <input type="text" id="price" name="price" />
                    </div>
                    <div class="col-12">
                        <label for="additional_info" class="fl-label">Допълнения и коментари</label>
                        <textarea id="additional_info" name="additional_info" spellcheck="false"></textarea>
                    </div>
                </div>

                <div class="btn-holder">
                    <button class="btn primary-btn"> Изпрати съобщение</button>
                </div>
            </form>
        </div>
    </section>

@endsection

