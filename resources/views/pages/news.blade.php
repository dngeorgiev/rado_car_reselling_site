@extends('layouts.app')

@include('includes.navigation')

@section('header')
@include('includes.secondary_header')
@endsection

@section('content')
<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="news-box">
                    <div class="thumb">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <h2 class="news-title">
                            Заглавие на новината
                        </h2>
                        <div class="news-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan libero augue,
                            blandit volutpat massa viverra eu.
                            Donec egestas consectetur felis eu mattis. Mauris fringilla arcu id ex bibendum tincidunt.
                            Maecenas sit amet arcu suscipit,
                            molestie eros sit amet, semper quam. Aliquam non luctus nunc, sit amet dictum ex. Donec
                            felis felis, venenatis sit amet ex at,
                            auctor egestas ante. Quisque at mi nunc. Vestibulum aliquet aliquam porta.
                        </div>
                        <div class="more-info">
                            <span>12/11/2019</span>
                            <span>0 коментара</span>
                            <a href="{{ route('news.single-news', 1) }}" class="view-news">Прочетете още <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="news-box">
                    <div class="thumb">
                        <img src="{{ asset('images/backgrounds/about_us_page_bg_img.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <h2 class="news-title">
                            Заглавие на новината
                        </h2>
                        <div class="news-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan libero augue,
                            blandit volutpat massa viverra eu.
                            Donec egestas consectetur felis eu mattis. Mauris fringilla arcu id ex bibendum tincidunt.
                            Maecenas sit amet arcu suscipit,
                            molestie eros sit amet, semper quam. Aliquam non luctus nunc, sit amet dictum ex. Donec
                            felis felis, venenatis sit amet ex at,
                            auctor egestas ante. Quisque at mi nunc. Vestibulum aliquet aliquam porta.
                        </div>
                        <div class="more-info">
                            <span>12/11/2019</span>
                            <span>0 коментара</span>
                            <a href="{{ route('news.single-news', 1) }}" class="view-news">Прочетете още <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="news-box no-thumb">
                    <div class="content">
                        <h2 class="news-title">
                            Заглавие на новината
                        </h2>
                        <div class="news-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan libero augue,
                            blandit volutpat massa viverra eu.
                            Donec egestas consectetur felis eu mattis. Mauris fringilla arcu id ex bibendum tincidunt.
                            Maecenas sit amet arcu suscipit,
                            molestie eros sit amet, semper quam. Aliquam non luctus nunc, sit amet dictum ex. Donec
                            felis felis, venenatis sit amet ex at,
                            auctor egestas ante. Quisque at mi nunc. Vestibulum aliquet aliquam porta.
                        </div>
                        <div class="more-info">
                            <span>12/11/2019</span>
                            <span>0 коментара</span>
                            <a href="{{ route('news.single-news', 1) }}" class="view-news">Прочетете още <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
