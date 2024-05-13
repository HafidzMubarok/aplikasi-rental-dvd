@extends('layouts.app', ['activePage' => 'user', 'title' => $title, 'navName' => $title, 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="dflex justify-content-center">

                    <div class="card col-md-8">
                        <div class="card-header">
                            <div class="align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-4">{{ $title }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('peminjaman.store') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- @method('post') --}}
                                
                                @include('alerts.success')
        
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Judul Film
                                        </label>
                                        <select name="kode_kaset" id="judul_film" class="form-control">
                                            <option id="judul_film_option"></option>
                                            @foreach ($dvds as $dvd)
                                                <option value="{{ $dvd->kode_kaset }}">{{ $dvd->kode_kaset }} - {{ $dvd->judul_film }}</option>
                                            @endforeach
                                        </select>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Jumlah DVD
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="jumlah_dvd"
                                        name="jumlah_dvd" placeholder="" value="{{ old('jumlah_dvd') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Nama Peminjam
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="nama_peminjam"
                                        name="nama_peminjam" placeholder="" value="{{ old('nama_peminjam') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Alamat Peminjam
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="alamat_peminjam"
                                        name="alamat_peminjam" placeholder="" value="{{ old('alamat_peminjam') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Nomor Kontak Peminjam
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="no_kontak_peminjam"
                                        name="no_kontak_peminjam" placeholder="" value="{{ old('no_kontak_peminjam') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Durasi Peminjaman
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="durasi_peminjaman"
                                        name="durasi_peminjaman" placeholder="" value="{{ old('durasi_peminjaman') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Metode Pembayaran
                                        </label>
                                        <select name="id_metode_pembayaran" id="metode_pembayaran" class="form-control">
                                            <option id="metode_pembayaran_option"></option>
                                            @foreach ($metodePembayarans as $metodePembayaran)
                                                <option value="{{ $metodePembayaran->id_metode_pembayaran }}">{{ $metodePembayaran->id_metode_pembayaran }} - {{ $metodePembayaran->nama_metode_pembayaran }}</option>
                                            @endforeach
                                        </select>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ url()->previous() }}" class="btn btn-default mt-4 px-auto"><i class="fa fa-arrow-left"></i>Kembali</a>
                                        <button type="submit" class="btn btn-success mt-4 px-auto">Tambahkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection