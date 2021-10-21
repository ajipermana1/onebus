@extends('main.tsdash')

@section('content')
    <h1>Wellcome back, {{ auth()->user()->name }}</h1>

@endsection
