@extends('main.tsdash')

@section('content')



    <h2 class="text-center">Schedule Management</h2>

    <a href="/jdwl/create" class="btn btn-info my-2">Add New Schecedule</a>
    <div class="input-group my-2">

        <input type="text" aria-label="First name" class="form-control" placeholder="Nama Buss" autofocus>
        <input type="text" aria-label="Last name" class="form-control" placeholder="Nama Statiun">
        <input type="text" aria-label="First name" class="form-control" placeholder="Tujuan">
        <div class="input-group-append">
            <input class="btn btn-outline-success" type="button" value="Search">
            <form>
                {{-- <input class="button" type="button" value="Cari"> --}}
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Rincian</th>
                <th scope="col">Waktu Keberangkatan</th>
                <th scope="col">Harga Tiket</th>
                <th scope="col">Titik Keberangkatan</th>
                <th scope="col">Titik Penurunan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jadwal Sinar Jaya Depok ke Purworejo</td>
                <td>07.00/10.00</td>
                <td>Rp140.000-Rp160.000</td>
                <td> Terminal Jatijajar</td>
                <td>Bagelen, Kutoarjo, Pendowo, Purworejo, Pasuruan</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jadwal Sinar Jaya Purworejo ke Jakarta</td>
                <td> 14:40 | 15:30 | 15:35 | 15:55 | 16:00 | 16:10</td>
                <td>Rp135.000-Rp150.000</td>
                <td> Kutoarjo, Pendowo, Purworejo, Pasuruan</td>
                <td>Cibubur, Terminal Kalideres, Terminal Kampung Rambutan, Terminal Lebak Bulus, Terminal Pulo Gebang</td>

            </tr>

        </tbody>
    </table>


@endsection
