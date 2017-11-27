@inject("social", "Helper\SocialHelper")

@extends('layouts.master')

@section('page')
    <h1>I am blade home</h1>
    {{ $social->getUser() }}
    <hr>

    <div>
        {{ dump($menus) }}
        {{ dump($person) }}
    </div>

    <hr>


    @foreach($data as $d)
        {{ dump($d) }}
    @endforeach
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
@endsection