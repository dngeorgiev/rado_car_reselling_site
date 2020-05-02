@extends('layouts.app')

@include('includes.navigation')

@section('header')
@include('includes.secondary_header')
@endsection

@section('content')
<section id="offers">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <a class="offer-card" href="{{ route('offers.single-offer', 1) }}">
                    <div class="image">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="title-price-holder">
                            <div class="card-title text-bold">
                                Title
                            </div>
                            <div class="card-price text-orange text-bold">
                                23 000
                            </div>
                        </div>
                        <div class="model">
                            Model
                        </div>
                        <div class="additional-specs">
                            <div class="prop">Година: <span class="prop-inner text-bold">2004</span></div>
                            <div class="prop">Километраж: <span class="prop-inner text-bold">18 450</span></div>
                            <div class="prop">Купе/нрой врати: <span class="prop-inner text-bold">5</span></div>
                            <div class="prop">Двигател: <span class="prop-inner text-bold">1.6 dci</span></div>
                            <div class="prop">Скорости: <span class="prop-inner text-bold">5</span></div>
                        </div>
                        <div class="additional-info">
                            Допълнителен текст, който е ограничен до 100 символа с добавени три точки накрая.
                            допълнителен текст...
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('offers.single-offer', 1) }}" class="offer-card">
                    <div class="image">
                        <img src="{{ asset('images/backgrounds/offers_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="title-price-holder">
                            <div class="card-title text-bold">
                                Title
                            </div>
                            <div class="card-price text-orange text-bold">
                                23 000
                            </div>
                        </div>
                        <div class="model">
                            Model
                        </div>
                        <div class="additional-specs">
                            <div class="prop">Година: <span class="prop-inner text-bold">2004</span></div>
                            <div class="prop">Километраж: <span class="prop-inner text-bold">18 450</span></div>
                            <div class="prop">Купе/нрой врати: <span class="prop-inner text-bold">5</span></div>
                            <div class="prop">Двигател: <span class="prop-inner text-bold">1.6 dci</span></div>
                            <div class="prop">Скорости: <span class="prop-inner text-bold">5</span></div>
                        </div>
                        <div class="additional-info">
                            Допълнителен текст, който е ограничен до 100 символа с добавени три точки накрая.
                            допълнителен текст...
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('offers.single-offer', 1) }}" class="offer-card">
                    <div class="image">
                        <img src="{{ asset('images/backgrounds/documents_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="title-price-holder">
                            <div class="card-title text-bold">
                                Title
                            </div>
                            <div class="card-price text-orange text-bold">
                                23 000
                            </div>
                        </div>
                        <div class="model">
                            Model
                        </div>
                        <div class="additional-specs">
                            <div class="prop">Година: <span class="prop-inner text-bold">2004</span></div>
                            <div class="prop">Километраж: <span class="prop-inner text-bold">18 450</span></div>
                            <div class="prop">Купе/нрой врати: <span class="prop-inner text-bold">5</span></div>
                            <div class="prop">Двигател: <span class="prop-inner text-bold">1.6 dci</span></div>
                            <div class="prop">Скорости: <span class="prop-inner text-bold">5</span></div>
                        </div>
                        <div class="additional-info">
                            Допълнителен текст, който е ограничен до 100 символа с добавени три точки накрая.
                            допълнителен текст...
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('offers.single-offer', 1) }}" class="offer-card">
                    <div class="image">
                        <img src="{{ asset('images/backgrounds/offers_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="title-price-holder">
                            <div class="card-title text-bold">
                                Title
                            </div>
                            <div class="card-price text-orange text-bold">
                                23 000
                            </div>
                        </div>
                        <div class="model">
                            Model
                        </div>
                        <div class="additional-specs">
                            <div class="prop">Година: <span class="prop-inner text-bold">2004</span></div>
                            <div class="prop">Километраж: <span class="prop-inner text-bold">18 450</span></div>
                            <div class="prop">Купе/нрой врати: <span class="prop-inner text-bold">5</span></div>
                            <div class="prop">Двигател: <span class="prop-inner text-bold">1.6 dci</span></div>
                            <div class="prop">Скорости: <span class="prop-inner text-bold">5</span></div>
                        </div>
                        <div class="additional-info">
                            Допълнителен текст, който е ограничен до 100 символа с добавени три точки накрая.
                            допълнителен текст...
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="{{ route('offers.single-offer', 1) }}" class="offer-card">
                    <div class="image">
                        <img src="{{ asset('images/backgrounds/documents_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="title-price-holder">
                            <div class="card-title text-bold">
                                Title
                            </div>
                            <div class="card-price text-orange text-bold">
                                23 000
                            </div>
                        </div>
                        <div class="model">
                            Model
                        </div>
                        <div class="additional-specs">
                            <div class="prop">Година: <span class="prop-inner text-bold">2004</span></div>
                            <div class="prop">Километраж: <span class="prop-inner text-bold">18 450</span></div>
                            <div class="prop">Купе/нрой врати: <span class="prop-inner text-bold">5</span></div>
                            <div class="prop">Двигател: <span class="prop-inner text-bold">1.6 dci</span></div>
                            <div class="prop">Скорости: <span class="prop-inner text-bold">5</span></div>
                        </div>
                        <div class="additional-info">
                            Допълнителен текст, който е ограничен до 100 символа с добавени три точки накрая.
                            допълнителен текст...
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
