@inject("social", "Helper\SocialHelper")

@extends('layouts.master')

@section('style')
    <link rel="stylesheet" href="/css/home.css">
@endsection

@section('page')
    <section class="home-page">
        <h1>I am blade home</h1>
        {{ $social->getUser() }}
        <hr>
        <b class="s66">Testing mixin</b>

        <p class="p1">
            I am P1
        </p>

        <p class="p2">
            I am P2
            <span>
                <a href="#">Click me</a>
            </span>
        </p>

        <hr>
        <div>
            {{ dump($menus) }}
            {{ dump($person) }}
        </div>

        <hr>
        @foreach($data as $d)
            {{ dump($d) }}
        @endforeach
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
@endsection