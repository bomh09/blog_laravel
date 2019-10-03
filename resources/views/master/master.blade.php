<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>@yield('title', 'Trang chủ')</title>
</head>
<body>
    @include('master.header')

    <div class="content">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

    @include('master.footer')
</body>
</html>