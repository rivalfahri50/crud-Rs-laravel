@if(Session::get('logout'))
<script>alert("Anda telah logout!")</script>
@endif
@if(Session::get('success'))
<script>alert("Berhasil Registrasi!")</script>
@endif
<div class="bg-image"
     style="background-image: url('https://res.cloudinary.com/dk0z4ums3/image/upload/v1608025776/attached_image/apakah-saya-hamil.jpg');
             background-repeat: no-repeat; background-size: cover;">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@extends('layout')
@section('content')
<main class="login-form">

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-header text-center">Login</h4>

                    @if(\Session::has('message'))
                        <div class="alert alert-danger">
                            {{\Session::get('message')}}
                        </div>
                    @endif

                        <form method="POST" action="{{ route('postlogin') }}">
                            @csrf
                            <div class="form-group mb-3 ">Email
                                <input type="text" placeholder="Email"  id="email" class="form-control" name="email" value="{{ old('email') }}"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3 ">Password
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-gird mx-auto text-center ">
                                belum punya akun? <a href="signup">Registrasi</a>
                            </div><br>
                                <div class="d-grid mx-auto text-center">
                                <button type="submit" class="btn btn-dark btn-block" href="/nyoba">Login</button>
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
