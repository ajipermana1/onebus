@extends('main.tfdash')

@section('content')
    <div class="row">
        <div class="col-lg-12">









            <h2 class="text-center">Jadwal Bus Tersedia</h2>
            @if (session()->has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif



            {{-- Start searching section (unfuntionable / belum berfungsi) --}}


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

                    </div>
            </form>
            {{-- end searching --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Bus</th>
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
                                <a href="/jadwal/{{ $bus->id }}" class="badge badge-info"><i
                                        class="bi bi-eye"></i></a>

                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>


@endsection
