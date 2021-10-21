@extends('main.tfdash')

@section('content')

    <h2>Detail Bus's Schecedule</h2>

    <table class="table">

        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{ $bus->nama }}</td>

            </tr>
            <tr>
                <th scope="row">Rute</th>
                <td>{{ $bus->rutes->hometowns->terminal }} ({{ $bus->rutes->hometowns->nama }}) |
                    {{ $bus->rutes->destinations->terminal }} ({{ $bus->rutes->destinations->nama }})</td>

            </tr>
            <tr>
                <th scope="row">Tanggal Berangkat</th>
                <td>{{ $bus->tgl_brkt }}</td>

            </tr>
            <tr>
                <th scope="row">Tanggal Pulang</th>
                <td>{{ $bus->tgl_plg }}</td>

            </tr>
            <tr>
                <th scope="row">Jam Berangkat</th>
                <td>{{ $bus->jam_brkt }}</td>

            </tr>
            <tr>
                <th scope="row">Jam Pulang</th>
                <td>{{ $bus->jam_plg }}</td>

            </tr>
            <tr>
                <th scope="row">Harga Tiket </th>
                <td>
                    Rp.{{ $bus->harga }}
                </td>

            </tr>
            <tr>
                <th> <a href="/jadwal">Back</a></th>
            </tr>

        </tbody>
    </table>



@endsection
