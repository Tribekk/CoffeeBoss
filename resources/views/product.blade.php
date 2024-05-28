@extends('maintemplate')
@section('content')
    <div class="container mt-5">
        <h1>Товары</h1>
        <div class="row mt-5">
            @foreach($categories as $category)
                <h2 class="mt-5">{{$category->name}}</h2>
                @foreach($category->products as $product)
                    <div class="col-lg-3 text-center mt-5">
                        <img src="{{asset('storage/'. $product->img)}}" class="border rounded w-100" alt="">
                        <h3>{{$product->price}} P.</h3>
                        <h5>{{$product->name}}</h5>
                        <a href="{{route('add.order.list', ['id' => $product->id])}}" type="button" class="btn btn-success">Добавить</a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
