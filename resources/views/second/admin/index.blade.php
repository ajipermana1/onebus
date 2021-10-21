@extends('main.tsdash')


@section('content')







    <h2 class="text-center">User Management</h2>

    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="/admin/create" class="btn btn-outline-primary btn-sm my-2">Create New User</a>

    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)

                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="/admin/{{ $user->id }}" class="badge badge-info"><i class="bi bi-eye"></i></a>
                        <a href="/admin/{{ $user->id }}/edit" class="badge badge-success"><i
                                class="bi bi-pencil-square"></i></a>

                        <form action="{{ route('admin.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="badge badge-danger border-0" onclick="return confirm('Deleting data?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>




                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
