@extends('main.tsdash')

@section('content')
    <div class="row">

        <div class="col-lg-7">

            <h2 class="d-block">Create Schedule </h2>

            <form action="/jdwl" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Rincian</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name"
                        autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="username">Waktu Keberangkatan</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                        id="username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="email">Harga Tiket</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="password">Titik Keberangkatan</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror " name="password"
                        id="password" value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Titik Penurunan</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror " name="password"
                        id="password" value="{{ old('password') }}">
                    @error('password')
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
