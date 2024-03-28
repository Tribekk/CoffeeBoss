@extends("maintemplate")
@section('content')
    <div class="container mt-5">
        <div class="d-flex">
            <img class="avatar-2" src="../storage/{{$user->avatar}}" alt="">
            <div>
                <h1 class="m-4">{{$user->name}}</h1>
                <h2 class="ms-4">{{$user->email}}</h2>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-lg-4">
                <a href="{{route('user.update.avatar')}}" type="button" class="btn btn-success"><h2 class="p-1">Изменить аватар</h2></a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('user.update.password')}}" type="button" class="btn btn-warning"><h2 class="p-1">Изменить пароль</h2></a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('user.delete')}}" type="button" class="btn btn-danger"><h2 class="p-1">Удалить аккаунт</h2></a>
            </div>
        </div>
    </div>
@endsection
