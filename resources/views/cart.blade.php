@extends('maintemplate')
@section('content')
    <div class="container">
        <h1>Корзина</h1>
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <p>Всего товаров в корзине: {{ $totalItems }}</p>

        @if($orders->isNotEmpty())
            <table class="table">
                <thead>
                <tr>
                    <th>Продукт</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Итого</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->products->name }}</td>
                        <td><a href="{{ route('minus.id', ['id' => $order->products->id]) }}" type="button" class="btn btn-danger me-2">-</a>{{ $order->colvo }}<a href="{{ route('plus.id', ['id' => $order->products->id]) }}" type="button" class="btn btn-success ms-2">+</a></td>
                        <td>{{ $order->products->price }}</td>
                        <td>{{ $order->colvo*$order->products->price  }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id">
                                <a href="{{ route('cart.delete', ['id' => $order->id]) }}" type="submit" class="btn btn-danger">Удалить</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between mt-5">
                <h2>И того: {{$sum}}</h2>
                <form action="" method="post" class="border border p-5">
                    @csrf
                    <h5>Введите номер телефона и адрес для доставки</h5>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Номер телефона*</label>
                        <input type="text" class="form-control" placeholder="89000000000" name="phone" id="exampleFormControlInput1" required/>
                        <label for="exampleFormControlInput1" class="form-label">Адрес для доставки*</label>
                        <input type="text" class="form-control" placeholder="г.Оренбург, ул.Краснознамённая, д.23" name="address" id="exampleFormControlInput1" required/>
                    </div>
                    <button type="submit" class="btn btn-primary">Оформить доставку</button>
                </form>
            </div>
        @else
            <p>Ваша корзина пуста.</p>
        @endif
    </div>
@endsection
