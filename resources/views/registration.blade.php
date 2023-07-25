<style>
    .alert{
        padding: 20px;
        background-color: #d44336;
        color: white;
    }
    .closebtn{
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }
</style>
<div class="bg-image"
     style="background-image: url('https://rumahsakit.usu.ac.id/wp-content/uploads/2022/10/medical.jpg');
            height: 100vh">

@extends('layout')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="max">
                @if ($errors->any())
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                    <h3 class="card-header  text-center">Register</h3>
                    <div class="card-body">
                        <form action="{{ route('postsignup') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3"><b>Name
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">Email
                                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" value="{{ old('email') }}"  autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">Password
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">Konfrmasi Password
                                <input type="password" placeholder="password_confirmation" id="password_confirmation" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>

                                <div class="d-gird mx-auto text-center">
                                    sudah punya akun? <a href="login">Login</a>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
