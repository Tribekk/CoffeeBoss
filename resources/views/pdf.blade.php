<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}" type="text/css">
</head>
<body>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
    h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-spacing: 0;
    }

    th {
        background-color: #f0f0f0;
        padding: 10px;
        text-align: left;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }
</style>
<h1>Заказ №{{ $order->id }}</h1>
<h1>От {{Carbon\Carbon::parse($order->created_at)->format('d.m.Y H:i')}}</h1>
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
            <td><p>{{$item->name}}</p></td>
            <td>{{$item->price}} Р.</td>
            <td>{{$item->colvo}} шт.</td>
            <td>{{$item->totalPrice}} Р.</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h1>Итого: {{$summ}} Рублей.</h1>
</body>
</html>
