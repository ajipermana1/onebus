@extends('main.tsdash')

@section('content')
    <div class="row">
        <div class="col-lg-12">









            <h2 class="text-center">Schedule Management</h2>

            <a href="/jdwl/create" class="btn btn-info my-2">Add New Schecedule</a>
            <form class="d-inline">
                <div class="input-group my-2">

                    <input type="text" aria-label="First name" class="form-control" placeholder="Dari" autofocus>
                    <input type="text" aria-label="Last name" class="form-control" placeholder="Ke">
                    <input type="text" aria-label="First name" class="form-control" placeholder="Tanggal Pergi">
                    <input type="text" aria-label="First name" class="form-control" placeholder="Tanggal Pulang"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Button</button>
                        {{-- <input class="button" type="button" value="Cari"> --}}
                    </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jam Berangkat</th>
                        <th scope="col">Jam Pulang</th>
                        <th scope="col">Titik Keberangkatan</th>
                        <th scope="col">Titik Penurunan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($buses as $bus)


                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $bus->nama }}</td>
                            <td>{{ $bus->jam_brkt }}</td>
                            <td>{{ $bus->jam_plg }}</td>
                            <td> {{ $bus->asal }}</td>
                            <td>{{ $bus->tujuan }}</td>
                            <td>
                                <a href="" class="badge badge-info"><i class="bi bi-eye"></i></a>
                                <a href="" class="badge badge-secondary"><i class="bi bi-pen"></i></a>
                                <a href="" class="badge badge-danger"><i class="bi bi-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>


@endsection
