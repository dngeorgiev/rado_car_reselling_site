@extends('layouts.app')

@include('includes.navigation')

@section('header')
@include('includes.secondary_header')
@endsection

@section('content')
<section id="contacts">

    <div class="container">
        <h2 class="title">
            Изпратете ни запитване
        </h2>
        <form action="" id="contacts-form">
            <div class="row">
                <div class="col-12 col-sm-6 mb-4">
                    <label for="name" class="custom-input">Име *</label>
                    <input type="text" id="name" name="name" />
                </div>
                <div class="col-12 col-sm-6 mb-4">
                    <label for="email" class="custom-input">Email *</label>
                    <input type="email" id="email" name="email" />
                </div>
                <div class="col-12 mb-4">
                    <label for="topic" class="custom-input">Относно</label>
                    <input type="text" id="topic" name="topic" />
                </div>
                <div class="col-12">
                    <label for="message" class="fl-label">Съобщение</label>
                    <textarea id="message" name="message" spellcheck="false"></textarea>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
