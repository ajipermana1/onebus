@extends('main.tsdash')

@section('content')
    <div class="row">

        <div class="col-lg-7">

            <h2 class="d-block">Create New User</h2>

            <form action="/admin" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" autofocus>

                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <a href="/admin" class="btn btn-secondary">Back</a>

                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>







@endsection
