@extends('maintemplate')
@section('content')
    <div class="container mt-5 text-center">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
                @foreach($galleryPhoto as $photo)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$photo->id-2}}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('../storage/2G7XOm9myE8.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>летний сезон скоро!</p>
                    </div>
                </div>
                @foreach($galleryPhoto as $photo)
                <div class="carousel-item">
                    <img src="{{asset('../storage/'.$photo->location)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>{{$photo->review}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
        <div class="row m-5">
            @foreach($paginateGalleryPhoto as $photo)
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('../storage/'.$photo->location)}}" class="card-img-top avatar-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$photo->review}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
