<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeminjamanRequest;
use Illuminate\Http\Request;
use App\Models\PeminjamanDvd;
use Illuminate\Support\Facades\DB;

class PeminjamanDvdController extends Controller
{
    public function __construct() {
        $this->title = "Peminjaman DVD";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen '.$this->title;
        // dd($title);
        
        $peminjamans = PeminjamanDvd::select(
            'id_peminjaman', 'dvd.judul_film as judul_film', 'jumlah_dvd', 'nama_peminjam', 
            'alamat_peminjam', 'no_kontak_peminjam', 'durasi_peminjaman',
            'metode_pembayaran.nama_metode_pembayaran as metode_pembayaran', 'total_pembayaran'
        )
        ->leftJoin('dvd','dvd.kode_kaset','peminjaman_dvd.kode_kaset')
        ->leftJoin('metode_pembayaran','metode_pembayaran.id_metode_pembayaran','peminjaman_dvd.id_metode_pembayaran')
        ->orderBy('id_peminjaman')
        ->get();

        // dd($peminjaman);

        return view('pages.peminjaman.index', compact('title', 'peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Buat Transaksi '.$this->title;

        $dvds = DB::table('dvd')->get();
        $metodePembayarans = DB::table('metode_pembayaran')->get();
        // dd($metodePembayarans);

        return view('pages.peminjaman.create', compact('title','dvds','metodePembayarans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeminjamanRequest $request)
    {
        $parameters = $request->validated();
        $dvd = DB::table('dvd')
        ->where('kode_kaset', $parameters['kode_kaset'])
        ->first();

        $totalPembayaran = $dvd->harga_sewa * $parameters['durasi_peminjaman'] * $parameters['jumlah_dvd'];

        $parameters['total_pembayaran'] = $totalPembayaran;

        // dd($parameters['total_pembayaran']);
        PeminjamanDvd::create($parameters);

        return redirect()->route('peminjaman.index')->with('success','Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PeminjamanDvd $peminjamanDvd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeminjamanDvd $peminjamanDvd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeminjamanDvd $peminjamanDvd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeminjamanDvd $peminjamanDvd)
    {
        //
    }
}
