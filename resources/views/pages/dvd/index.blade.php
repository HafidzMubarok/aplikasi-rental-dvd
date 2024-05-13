@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim &
UPDIVISION', 'navName' => $title, 'activeButton' => 'laravel'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Daftar DVD</h4>
                        <p class="card-category">Berikut daftar dvd yang tersedia</p>
                        <a href="{{ route('dvd.create') }}" class="btn btn-success">Tambah DVD</a>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Kode Kaset</th>
                                <th>Judul Film</th>
                                <th>Genre</th>
                                <th>Stok DVD</th>
                                <th>Tahun Rilis</th>
                                <th>Harga Sewa / Hari</th>
                                <th>Bahasa</th>
                                {{-- <th>Aksi</th> --}}
                            </thead>
                            @foreach ($dvds as $dvd)
                            <tbody>
                                <tr>
                                    <td>{{ $dvd->kode_kaset }}</td>
                                    <td>{{ $dvd->judul_film }}</td>
                                    <td>{{ $dvd->genre }}</td>
                                    <td>{{ $dvd->stok_dvd }}</td>
                                    <td>{{ $dvd->tahun_rilis_film }}</td>
                                    <td>{{ $dvd->harga_sewa }}</td>
                                    <td>{{ $dvd->bahasa }}</td>
                                    <td>
                                    {{-- <td class="d-flex justify-content-start">
                                        <a href="#
                                        {{ route('dvd.edit', ['id' => $item->id]) }}
                                        "><i class="fa fa-eye"></i></a>
                                        <a href="#
                                        {{ route('dvd.edit', ['id' => $item->id]) }}
                                        "><i class="fa fa-edit text-warning"></i></a>
                                        <a href="#
                                        {{ route('dvd.edit', ['id' => $item->id]) }}
                                        "><i class="fa fa-trash text-danger"></i></a>
                                    </td> --}}
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection