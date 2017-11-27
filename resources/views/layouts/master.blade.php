<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title or 'Laravel' }}</title>
    @yield('style')
</head>
<body>
<h1>Master is here</h1>
@yield('page')
@yield('script')
</body>
</html>
