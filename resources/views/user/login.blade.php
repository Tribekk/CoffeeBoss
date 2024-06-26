@extends("maintemplate")
@section('content')
    <div class="container form-signin w-100 m-auto align-items-center py-4">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <form method="post" action="">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">                    <img class="mb-4" src="../picture/image0.png" alt="" width="100" height="100" style="background-color: white; border-radius: 50%">
                        </div>
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center" style="color: white">Вход</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                        @error('email')
                        <div class="alert alert-danger mt-2">{{$massage}}</div>
                        @enderror
                    </div>
                    <div class="form-floating mt-5">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Пароль</label>
                        @error('password')
                        <div class="alert alert-danger mt-2">{{$massage}}</div>
                        @enderror
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Оставаться в системе
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
                    <div class="container">
                        <a href="{{route('user.signup')}}" class="link mt-5">Регистрация</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
