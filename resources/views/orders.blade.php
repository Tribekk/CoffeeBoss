@extends('maintemplate')
@section('content')
    <div class="container">
        <h1>Мои заказы</h1>
        <table class="table mt-5">
            <thead>
            <tr>
                <th>Данные заказа</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->address }}</td>
                    <td>{{Carbon\Carbon::parse($order->created_at)->format('d.m.Y'). ' '. Carbon\Carbon::parse($order->created_at)->diffForHumans()}}</td>
                    <td>{{$order->status}}</td>
                    <td><a href="{{route('check', ['id'=>$order->id])}}" type="button" class="btn btn-success">Просмотр деталей</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
