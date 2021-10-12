@extends('main.tfdash')

@section('content')
    <div class="form-row justify-content-center mt-4">
        <div class="col-md-5">


            <h2 class="text-center">LOGIN ONE BUS</h2>
            @if (session()->has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>

            @endif

            <form action="/login" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" name="username" id="username" class="form-control mt-0" placeholder="Username">
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control mt-3 mb-2"
                        placeholder="Password">
                </div>
                <button class="btn btn-success  btn-block">LOGIN</button>
                <p>Not have an account? <a href="/register">Register now!</a></p>
            </form>

        </div>

    </div>
@endsection
