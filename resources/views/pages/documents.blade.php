@extends('layouts.app')

@include('includes.navigation')

@section('header')
    @include('includes.secondary_header')
@endsection

@section('content')
    <section id="documents">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="documents-card individual">
                        <div class="icon-holder">
                            <img src="{{ asset('images/icons/boss.svg') }}" alt="Физическо лице">
                        </div>
                        <h3 class="documents-card-title text-uppercase text-orange text-bold">Физическо лице</h3>
                        <div class="text">
                            <ul>
                                <li>Голям талон</li>
                                <li>Малък талон</li>
                                <li>Лична карта на притежателя на автомобила</li>
                                <li>Бележка за платен данък с печат на общината</li>
                                <li>Ако колата е придобита по време на брака – задължително е присъствието на
                                    съпруг/а на собственика или нотариално заверено пълномощно от него с
                                    две декларации от текущата година</li>
                                <li>При продажба чрез пълномощно – нотариално заверени пълномощно за
                                    продажба на автомобил и две декларации за текущата година</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="documents-card legal-entity">
                        <div class="icon-holder">
                            <img src="{{ asset('images/icons/suitcase.svg') }}" alt="Юридическо лице">
                        </div>
                        <h3 class="documents-card-title text-uppercase text-orange text-bold">Юридическо лице</h3>
                        <div class="text">
                            <ul>
                                <li>Голям талон</li>
                                <li>Малък талон</li>
                                <li>Бележка за платен данък с печат на общината</li>
                                <li>Личната карта на управителя на фирмата</li>
                                <li>Фактура към нашата фирма за уговорената
                                    цена на автомобила</li>
                                <li>При продажба чрез пълномощно - нотариално
                                    заверени пълномощно и
                                    декларация за текущата година</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
