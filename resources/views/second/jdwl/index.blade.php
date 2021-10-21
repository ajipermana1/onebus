@extends('main.tsdash')

@section('content')
    <div class="row">
        <div class="col-lg-12">









            <h2 class="text-center">Schecedule Management</h2>
            @if (session()->has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <a href="/jdwl/create" class="btn btn-outline-info btn-sm mb-1">Add New Schecedule</a>
            <form class="d-inline" action="" method="GET">
                <div class="input-group">
                    <div class="form-group mb-0 col-lg-3 pr-0 pl-0">

                        <select class="form-control" id="exampleFormControlSelect1" aria-label="Dari" name="dari"
                            placeholder="Dari" autofocus>
                            <option>Dari</option>
                            @foreach ($hometowns as $hometown)
                                <option value="{{ $hometown->id }}">{{ $hometown->nama }}</option>

                            @endforeach

                        </select>
                    </div>
                    <div class="form-group mb-0  col-lg-3 pr-0 pl-0 ">

                        <select class="form-control" id="exampleFormControlSelect1" aria-label="First name" name="ke"
                            placeholder="Dari" autofocus>
                            <option>Ke</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination->id }}">{{ $destination->nama }}</option>

                            @endforeach
                        </select>
                    </div>

                    <input type="date" aria-label="First name" class="form-control" placeholder="Tanggal Pergi"
                        name="tgl_brkt">
                    <input type="date" aria-label="First name" class="form-control" placeholder="Tanggal Pulang"
                        aria-describedby="button-addon2" tgl_plg>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>
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
                            <td>{{ $bus->rutes->hometowns->terminal }}</td>
                            <td> {{ $bus->rutes->destinations->terminal }}</td>
                            <td>
                                <a href="/jdwl/{{ $bus->id }}" class="badge badge-info"><i
                                        class="bi bi-eye"></i></a>
                                <a href="/jdwl/{{ $bus->id }}/edit" class="badge badge-success"><i
                                        class="bi bi-pen"></i></a>
                                <form action="/jdwl/{{ $bus->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="badge badge-danger border-0"
                                        onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>


@endsection
