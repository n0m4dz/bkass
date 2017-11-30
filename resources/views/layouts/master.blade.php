<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_roken" content="{{ csrf_token() }}">

    <title>{{ $title or 'Laravel' }}</title>
    <link rel="stylesheet" href="/css/toastr.min.css">
    <link rel="stylesheet" href="/css/app.css">
    @yield('style')
</head>
<body>

<h1>Master is here</h1>
@yield('page')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/toastr.min.js"></script>
<script src="/js/app.js"></script>
<script>
    @if(session()->has('alert'))
    @switch(session('alert'))
        @case('success')
            toastr.success('{{ session('msg') }}')
            @break
        @case('error')
            toastr.error('{{ session('msg') }}')
            @break
        @default
            @break
    @endswitch
    @endif
</script>

@yield('script')
</body>
</html>
