@extends('main.tsdash')

@section('content')

    <h2>Detail User</h2>

    <table class="table">

        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{ $user->name }}</td>

            </tr>
            <tr>
                <th scope="row">Username</th>
                <td>{{ $user->username }}</td>

            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $user->email }}</td>

            </tr>
            <tr>
                <th scope="row">Created </th>
                <td>
                    {{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
                </td>

            </tr>
            <tr>
                <th> <a href="/admin">Back</a></th>
            </tr>

        </tbody>
    </table>



@endsection
