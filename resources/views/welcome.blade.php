@extends('maintemplate')
@section('content')
    <div class="container">
        <div class="mt-3 favicon">
            <div>
                <div class="d-flex">
                    <svg width="50px" height="50px" class="mt-2" viewBox="-6 -6 36.00 36.00" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0">
                            <rect x="-6" y="-6" width="36.00" height="36.00" rx="18" fill="#a96f12" strokewidth="0"></rect>
                        </g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M14 2C14 2 16.2 2.2 19 5C21.8 7.8 22 10 22 10" stroke="#fff" stroke-width="1.5"
                                  stroke-linecap="round"></path>
                            <path
                                d="M14.207 5.53564C14.207 5.53564 15.197 5.81849 16.6819 7.30341C18.1668 8.78834 18.4497 9.77829 18.4497 9.77829"
                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M4.00655 7.93309C3.93421 9.84122 4.41713 13.0817 7.6677 16.3323C8.45191 17.1165 9.23553 17.7396 10 18.2327M5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C15.2529 20.0243 14.1963 19.9541 13 19.6111"
                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    <div class="mx-3">
                        <p>Звоните по номеру</p>
                        <a href="tel:88007000000" class="link">8 800 700-00-00</a>
                    </div>
                    <svg width="50px" height="50px" class="mt-2 ms-5" viewBox="-6.72 -6.72 37.44 37.44" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0">
                            <rect x="-6.72" y="-6.72" width="37.44" height="37.44" rx="18.72" fill="#a96f12"
                                  strokewidth="0"></rect>
                        </g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <div class="mx-3">
                        <p>Мы находимся</p>
                        <a href="tel:88007000000" class="link">Краснознамённая 23, Оренбург</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text">
            <h1 class="mt-5">Лучший</h1>
            <h2 class="m-3 ms-5">КОФЕ В ГОРОДЕ</h2>
            <p>Мы входим в топ лучших кафе по городу. У нас вы сможете насладиться уютной атмосферой и ароматным кофе или
                заказать доставку</p>
        </div>
        <div class="d-flex social mt-3">
            <a href="https://vk.com/coffeebossru">
                <svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-102.4 -102.4 716.80 716.80" xml:space="preserve"
                     fill="black" stroke="black" stroke-width="5.12"><g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-102.4" y="-102.4" width="716.80" height="716.80" rx="358.4" fill="#332A1CFF"
                              strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M440.649,295.361c16.984,16.582,34.909,32.182,50.142,50.436 c6.729,8.112,13.099,16.482,17.973,25.896c6.906,13.382,0.651,28.108-11.348,28.907l-74.59-0.034 c-19.238,1.596-34.585-6.148-47.489-19.302c-10.327-10.519-19.891-21.714-29.821-32.588c-4.071-4.444-8.332-8.626-13.422-11.932 c-10.182-6.609-19.021-4.586-24.84,6.034c-5.926,10.802-7.271,22.762-7.853,34.8c-0.799,17.564-6.108,22.182-23.751,22.986 c-37.705,1.778-73.489-3.926-106.732-22.947c-29.308-16.768-52.034-40.441-71.816-67.24 C58.589,258.194,29.094,200.852,2.586,141.904c-5.967-13.281-1.603-20.41,13.051-20.663c24.333-0.473,48.663-0.439,73.025-0.034 c9.89,0.145,16.437,5.817,20.256,15.16c13.165,32.371,29.274,63.169,49.494,91.716c5.385,7.6,10.876,15.201,18.694,20.55 c8.65,5.923,15.236,3.96,19.305-5.676c2.582-6.11,3.713-12.691,4.295-19.234c1.928-22.513,2.182-44.988-1.199-67.422 c-2.076-14.001-9.962-23.065-23.933-25.714c-7.129-1.351-6.068-4.004-2.616-8.073c5.995-7.018,11.634-11.387,22.875-11.387h84.298 c13.271,2.619,16.218,8.581,18.035,21.934l0.072,93.637c-0.145,5.169,2.582,20.51,11.893,23.931 c7.452,2.436,12.364-3.526,16.836-8.251c20.183-21.421,34.588-46.737,47.457-72.951c5.711-11.527,10.622-23.497,15.381-35.458 c3.526-8.875,9.059-13.242,19.056-13.049l81.132,0.072c2.406,0,4.84,0.035,7.17,0.434c13.671,2.33,17.418,8.211,13.195,21.561 c-6.653,20.945-19.598,38.4-32.255,55.935c-13.53,18.721-28.001,36.802-41.418,55.634 C424.357,271.756,425.336,280.424,440.649,295.361L440.649,295.361z"></path>
                    </g></svg>
            </a>
            <a href="https://www.instagram.com/coffeebossru?igsh=YjlrbnptdW9xa3p4" class="ms-3">
                <svg width="64px" height="64px" viewBox="-4.32 -4.32 32.64 32.64" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-4.32" y="-4.32" width="32.64" height="32.64" rx="16.32" fill="#332A1CFF"
                              strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                              fill="#fff"></path>
                        <path
                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                            fill="#fff"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                              fill="#fff"></path>
                    </g>
                </svg>
            </a>
            <div>
                <a class="btn ms-5" href="{{route('products')}}"><p class="mt-1">Заказать доставку</p></a>
            </div>
        </div>
    </div>
<div class="container mt-5 about d-flex">
    <div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mt-3">
                    <img src="../picture/8QwCPs3cU98.jpg" alt="" class="mx-5">
                    <p class="card-title">Рады сообщить Вам, что больше нет необходимости искать место для дружеских
                        посиделок, романтических встреч и
                        просто приятного отдыха в дружеской компании или даже в одиночестве. Вы уже нашли это место! И
                        это место -
                        наша кофейня! Провести приятный вечер в компании или за чашкой кофе почитать книгу наедине с
                        собой, устроить
                        романтический ужин или просто отведать хорошего кофе</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-3">
                    <img src="../picture/XcEvGUdPK-U.jpg" alt="" class="full-photo">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-3">
                    <h1>Немного о кофейне</h1>
                    <p>Проведите приятный вечер в компании или за чашкой кофе наедине с собой и насладитесь книгой в
                        нашей уютной и атмосферной кофейни.</p>
                    <img src="../picture/2G7XOm9myE8.jpg" alt="" style="width: 100% ">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="promotion container mt-5">
    <div class="row">
        <div class="col-lg-5">
            <div class="card mt-3">
                <img src="../picture/W8YZvfDWYzo.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card mt-3">
                <h1 class="text-center">Наши акции</h1>
            </div>
            <ul>
                <li class="m-3">Для вашего удобства действует программа лояльности, осканируйте QR-код на любом из наших
                    столиков.
                </li>
                <li class="m-3">Так же действует акция для всех именинников! Наша кофейня предоставляется скидку 50% в
                    течение 2
                    недель: в День Рождения, за 7 дней до и 7 дней после
                </li>
                <li class="m-3">Мы понимаем, что редко удаётся праздновать день рождения день в день.</li>
            </ul>
            <div>
                <a class="btn ms-5 mt-5" href="{{route('contacts')}}"><p class="mt-1">Как нас найти</p></a>
            </div>
        </div>
    </div>
</div>
<div class="promotion container mt-5">
    <div class="row">
        <div class="col-lg-5">
            <div class="card mt-3">
                <h1 class="text-center">Собери себе вафлю</h1>
            </div>
            <p>Изюминка нашего заведения, гонкогские вафли, мы представляем целых пять пунктов выбора.</p>
            <p class="mt-5">Выбери сам тесто:</p>
            <ul>
                <li class="m-3">Ванильное</li>
                <li class="m-3">Шоколадное</li>
                <li class="m-3">Классическая</li>
                <li class="m-3">Вернувшаяся легенда(Black вафля)</li>
            </ul>
            <p>Выбери любой наполнитель (если вы хотите чем-то другим наполнить нашу вафлю сообщите об этом
                сотруднику)</p>
            <p>Выбери начинку которая будет внутри теста</p>
            <p>Выбери начинку для наполнителя</p>
            <p>По желанию можно добавить любой из семи топингов и\или из трёх видов посыпки</p>
            <div>
                <a class="btn ms-5 mt-5" href="https://t.me/uv_delivery_bot"><p class="mt-1">Фото-галлерея</p></a>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card mt-3">
                <img src="../picture/2TlXvDIz4ss.jpg" alt="">
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="container review">
    <h1>Отзывы наших клиентов ({{$reviews->count()}})</h1>
    <h2 class="text-end"> ⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯нам важно ваше мнение</h2>
    <div class="row">
        @foreach($reviews as $review)
            <div class="col-lg-4">
                <div class="card mt-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <img class="avatar-1" src="../storage/{{$review->user['avatar']}}" alt="">
                        </div>
                        <div class="mt-2 col-lg-5">
                            <h4>{{$review->user['name']}}</h4>
                            <tt>{{\Carbon\Carbon::parse($review->created_at)->diffForHumans()}}</tt>
                        </div>
                    </div>
                    <p class="m-2">{{$review->massage}}</p>
                </div>
            </div>
        @endforeach
        @if($reviews->count()>3) @endif
        <div class="mt-5">
            {{ $reviews->links() }}
        </div>
    </div>
</div>
@endsection
