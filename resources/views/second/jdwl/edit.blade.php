@extends('main.tsdash')

@section('content')
    <div class="row">

        <div class="col-lg-7">

            <h2 class="d-block">Edit Bus's Schecedule</h2>

            <form action="/jdwl/{{ $bus->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama">Nama Bus</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" name="nama"
                        autofocus value="{{ old('nama', $bus->nama) }}" placeholder="Nama Bus" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                    <div class="form-group">
                        <label for="dari">Dari</label>
                        <select class="form-control @error('dari') is-invalid @enderror" id="dari" name="dari">


                            <option value="{{ $bus->rutes->hometowns->id }}">{{ $bus->rutes->hometowns->nama }}
                            <option>
                            <option value="1">Bogor</option>
                            <option value="2">Bogor</option>
                            <option value="3">Bandung</option>



                        </select>
                        @error('dari')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ke">Ke</label>
                        <select class="form-control @error('ke') is-invalid @enderror" id="ke" name="ke">
                            <option value="{{ $bus->rutes->destinations->id }}">{{ $bus->rutes->destinations->nama }}
                            <option>
                            <option value="1">Depok</option>
                            <option value="2">Bogor</option>
                            <option value="3">Bandung</option>


                        </select>
                        @error('ke')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <div class="form-group">
                    <label for="tgl_brkt">Tanggal Berangkat</label>
                    <input type="date" class="form-control @error('tgl_brkt') is-invalid @enderror" name="tgl_brkt"
                        id="tgl_brkt" value="{{ old('tgl_brkt', $bus->tgl_brkt) }}">
                    @error('tgl_brkt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="tgl_plg">Tanggal Pulang</label>
                    <input type="date" class="form-control @error('tgl_plg') is-invalid @enderror " name="tgl_plg"
                        id="tgl_plg" value="{{ old('tgl_plg', $bus->tgl_plg) }}">
                    @error('tgl_plg')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jam_brkt">Jam Berangkat</label>
                    <input type="time" class="form-control @error('jam_brkt') is-invalid @enderror " name="jam_brkt"
                        id="jam_brkt" value="{{ old('jam_brkt', $bus->jam_brkt) }}">
                    @error('jam_brkt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jam_plg">Jam Pulang</label>
                    <input type="time" class="form-control @error('jam_plg') is-invalid @enderror " name="jam_plg"
                        id="jam_plg" value="{{ old('jam_plg', $bus->jam_plg) }}">
                    @error('jam_plg')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror " name="harga" id="harga"
                        value="{{ old('harga', $bus->harga) }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <a href="/jdwl" class="btn btn-secondary">Back</a>

                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>







@endsection
