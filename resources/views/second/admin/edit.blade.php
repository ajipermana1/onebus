@extends('main.tsdash')

@section('content')
    <div class="row">

        <div class="col-lg-7">

            <h2 class="d-block">Edit User</h2>

            <form action="/admin/{{ $user->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" id="name"
                        autofocus value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control  @error('username') is-invalid  @enderror" name="username"
                        id="username" value="{{ old('username', $user->username) }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control  @error('email') is-invalid  @enderror" name="email" id="email"
                        value="{{ old('email', $user->email) }}">

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <a href="/admin" class="btn btn-secondary">Back</a>

                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>







@endsection
