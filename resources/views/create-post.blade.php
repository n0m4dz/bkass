@extends('layouts.master')

@section('page')
    @if(session()->has('msg'))
        <h1>{{ session('msg') }}</h1>
    @endif

    <form action="/post" method="post">
        <input type="text" name="title" value="{{old('title')}}">
        <br>
        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    @if(session()->has('name'))
        <h1>{{ session('name') }}</h1>
    @endif

    @if(session()->has('age'))
        <h1>{{ session('age') }}</h1>
    @endif

    @if(session()->has('w'))
        <h1>{{ session('w') }}</h1>
    @endif

    <h1>{{ session('height', 175) }}</h1>

    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $e)
                <li>
                    {{ $e }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection