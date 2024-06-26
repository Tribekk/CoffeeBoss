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
                @if($totalItems>0)
                    <a href="{{route('cart')}}" type="button" class="link position-relative">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M21 5L19 12H7.37671M20 16H8L6 3H3M11 6L13 8L17 4M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+{{$totalItems}} <span
                                class="visually-hidden">непрочитанные сообщения</span></span>
                    </a>
                @else
                    <a type="button" class="link position-relative">
                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg"
                             stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M21 5L19 12H7.37671M20 16H8L6 3H3M11 3L13.5 5.5M13.5 5.5L16 8M13.5 5.5L16 3M13.5 5.5L11 8M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                @endif
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
