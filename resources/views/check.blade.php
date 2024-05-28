@extends('maintemplate')
@section('content')
    <div class="container">
        <h1>Заказ</h1>
        <h2>от {{\Carbon\Carbon::parse($order->created_at->format('d.m.Y H:i:s'))}}</h2>
        <h2>Содержимое заказа:</h2>
        <table class="table mt-5">
            <thead>
            <tr>
                <th>Название продукта</th>
                <th>Цена за штуку</th>
                <th>Кол-во</th>
                <th>Итого</th>
            </tr>
            </thead>
            <tbody>
            @foreach($body as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}} Р.</td>
                    <td>{{$item->colvo}} шт.</td>
                    <td>{{$item->totalPrice}} Р.</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-5">
            <h2>Статус: {{$order->status}}</h2>
            <a href="{{ route('download', ['id' => $order->id]) }}" type="button" class="btn btn-primary">Чек</a>
        </div>
    </div>
@endsection
