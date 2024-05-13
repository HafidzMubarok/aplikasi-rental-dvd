@extends('layouts.app', ['activePage' => 'user', 'title' => $title, 'navName' => 'Manajemen DVD', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="row">

                    <div class="card col-md-8">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-4">{{ $title }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('dvd.store') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- @method('post') --}}
                                
                                @include('alerts.success')
        
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Kode Kaset
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="kode_pelapor"
                                        name="kode_kaset" placeholder="" value="{{ old('kode_kaset') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Judul Film
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="judul_film"
                                        name="judul_film" placeholder="" value="{{ old('judul_film') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Genre
                                        </label>

                                        <select name="genre" id="genre" class="form-control">
                                            <option id="genre_opntion"></option>
                                            @foreach ($genres as $genre)
                                                <option value="{{ $genre->nama_genre }}">{{ $genre->id_genre }} - {{ $genre->nama_genre }}</option>
                                            @endforeach
                                        </select>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Stok DVD
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="stok_dvd"
                                        name="stok_dvd" placeholder="" value="{{ old('stok_dvd') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Tahun Rilis
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="tahun_rilis_film"
                                        name="tahun_rilis_film" placeholder="" value="{{ old('tahun_rilis_film') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Harga Sewa
                                        </label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="harga_sewa"
                                        name="harga_sewa" placeholder="" value="{{ old('harga_sewa') }}" autocomplete="off"/>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            Bahasa
                                        </label>

                                        <select name="id_bahasa" id="bahasa" class="form-control">
                                            <option id="bahasa_opntion"></option>
                                            @foreach ($bahasas as $bahasa)
                                                <option value="{{ $bahasa->id_bahasa }}">{{ $bahasa->id_bahasa }} - {{ $bahasa->nama_bahasa }}</option>
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