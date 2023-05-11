<div class="bg-image"
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">

@extends('layout')
@section('content')
<main class="login-form">

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="max">
                    <h3 class="card-header text-center">Reset Password</h3>
                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
                        <form method="POST" action="{{ route('postlogin') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password2">
                                @if ($errors->has('password2'))
                                <span class="text-danger">{{ $errors->first('password2') }}</span>
                                @endif
                            </div>

                                <div class="d-grid mx-auto text-center">
                                <button type="submit" class="btn btn-dark btn-block" href="login">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
