@extends('maintemplate')
@section('content')
    <div class="container mt-5">
        <div class="container review">
            @auth
                <h1 class="text-end">Оставить коментарий</h1>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Коментарий</label>
                        <textarea type="text" class="form-control" id="formGroupExampleInput" name="message"
                                  placeholder="Ваш коментарий" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Оставить отзыв</button>
                </form>
            @endauth
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
    </div>
@endsection
