@extends('layouts.app')

@section('header')
    @include('includes.secondary_header')
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-text">
        <a href="{{ route('offers') }}"> Обяви </a> > title of card
        </div>
    </div>
</div>
<section id="single-offer">
    <div class="container">
        <div class="secondary-title">
            <h2>Chrysler</h2>
            <div class="inner-secondary-title">
                <span>Voyager</span>
                <span class="text-orange text-bold">35 800</span>
            </div>
        </div>

        <div class="specs text">
            <div class="prop">Дата на производство: <span class="text-bold">2002 година</span></div>
            <div class="prop">Километраж: <span class="text-bold">18 450</span></div>
            <div class="prop">Купе/брой врати: <span class="text-bold">5</span></div>
            <div class="prop">Двигател: <span class="text-bold">1.6 dci</span></div>
            <div class="prop">Скорости: <span class="text-bold">5</span></div>
        </div>

        <div class="additional-info text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
            the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>

        <div class="gallery">
            <div class="title">
                Галерия
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="gallery-img" data-fancybox="gallery" href="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
