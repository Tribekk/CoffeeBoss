<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../picture/image0.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CoffeeBoss</title>
</head>

<body>
<div class="container mt-5">
    <div class="d-flex">
        <img src="../picture/image0.png" alt="logo" class="logo me-3 mt-2">
        <div>
            <h2>CoffeeBoss</h2>
            <p class="cream">Гонкоские вафли</p>
        </div>
        <div class="mt-1 navbar text-end">
            <nav>
                <li><a href="{{route('home')}}" class="link">Главная</a></li>
                <li><a href="{{route('gallery')}}" class="link">Галерея</a></li>
                <li><a href="{{route('news')}}" class="link">Новости</a></li>
                <li><a href="{{route('reviews')}}" class="link">Отзывы о нас</a></li>
                <li><a href="{{route('contacts')}}" class="link">Контакты</a></li>
                @guest
                    <li><a href="{{route('user.login')}}" class="link">Войти</a></li>
                @endguest
                @auth
                    <li><a href="{{route('user.thisUser')}}" class="link">{{auth()->user()->name}}</a></li>
                    <li><a href="{{route('user.logout')}}" class="link">Выйти</a></li>
                @endauth
            </nav>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert" style="color: black">
            @foreach ($errors->all() as $massage)
                <li>{{ $massage }}</li>
            @endforeach
        </div>
    @endif
</div>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
