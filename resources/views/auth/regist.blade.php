@extends('main.tfdash')

@section('content')
    <div class="form-row justify-content-center mt-4">
        <div class="col-md-5">


            <h2 class="text-center">REGISTER ONE BUS</h2>

            <form action="/register" method="post">
                @csrf

                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control mb-2">
                </div>

                <div class="input-group">
                    <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Username">
                </div>
                <div class="input-group">
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control mb-2">
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Password">
                </div>
                <button class="btn btn-success  btn-block">REGISTER</button>
                <p>Already have an account? <a href="/login">Login now!</a></p>
            </form>

        </div>

    </div>
@endsection
