@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim &
UPDIVISION', 'navName' => $title, 'activeButton' => 'laravel'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Daftar Peminjaman</h4>
                        <p class="card-category">Berikut daftar transaksi peminjaman</p>
                        <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Transaksi Baru</a>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Id Peminjaman</th>
                                <th>Judul Film</th>
                                <th>Jumlah DVD</th>
                                <th>Nama Peminjam</th>
                                <th>Alamat Peminjam</th>
                                <th>No. Kontak Peminjam</th>
                                <th>Durasi Peminjaman</th>
                                <th>Metode Pembayaran</th>
                                <th>Total Pembayaran</th>
                                {{-- <th>Aksi</th> --}}
                            </thead>
                            @foreach ($peminjamans as $peminjaman)
                            <tbody>
                                <tr>
                                    <td>{{ $peminjaman->id_peminjaman }}</td>
                                    <td>{{ $peminjaman->judul_film }}</td>
                                    <td>{{ $peminjaman->jumlah_dvd }}</td>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>{{ $peminjaman->alamat_peminjam }}</td>
                                    <td>{{ $peminjaman->no_kontak_peminjam }}</td>
                                    <td>{{ $peminjaman->durasi_peminjaman }}</td>
                                    <td>{{ $peminjaman->metode_pembayaran }}</td>
                                    <td>{{ $peminjaman->total_pembayaran }}</td>
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