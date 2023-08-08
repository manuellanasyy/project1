@extends('template.index')

@section('title')
    Home
@endsection
@section('content')
    <!--Hero-->
    <style>
        .round-image {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>

    <section class="jumbotron text-center">
        <img src="{{ URL::to('/img/Kuromi-1-.webp') }}" width="200" class="round-image">
        <section class="jumbotron text-center">
            <h1 class="display-4">Maria Manuella Nasya Nunciata</h1>
            <p class="lead">11 RPL 1 | Absen 34</p>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1"
                d="M0,160L60,170.7C120,181,240,203,360,192C480,181,600,139,720,144C840,149,960,203,1080,218.7C1200,235,1320,213,1380,202.7L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
        <!--End of hero-->
    @endsection
