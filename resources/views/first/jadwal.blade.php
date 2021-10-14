@extends('main.tfdash')

@section('content')
    <div class="row">
        <div class="col-lg-12">









            <h2 class="text-center">Schedule Management</h2>


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
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jam Berangkat</th>
                        <th scope="col">Jam Pulang</th>
                        <th scope="col">Titik Keberangkatan</th>
                        <th scope="col">Titik Penurunan</th>

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


                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>


@endsection
