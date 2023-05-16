@if(Session::get('logout'))
<script>alert("Anda telah logout!")</script>
@endif
@if(Session::get('success'))
<script>alert("Berhasil Registrasi!")</script>
@endif
<div class="bg-image"
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@extends('layout')
@section('content')
<main class="login-form">

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="max">
                    <h3 class="card-header text-center">Login</h3>

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
                            <div class="form-group mb-3">Password
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-gird mx-auto text-center">
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
