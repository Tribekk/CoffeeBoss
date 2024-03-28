@extends('maintemplate')
@section('content')
    <div class="container mt-5">
        <h1>Новости</h1>
        @foreach($news as $new)
        <div class="row mt-5">
            <div class="col-lg-4"></div>
            <div class="col-lg-5">
                <div class="card">
                    <img src="../storage/{{$new->header_photo}}" alt="" class="card-img-top" style="width: 30vw">
                    <div class="card-body">
                        <h5 class="card-title">{{$new->title}}</h5>
                        <p class="card-text">{{$new->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
