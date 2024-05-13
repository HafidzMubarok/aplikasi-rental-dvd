<?php

namespace App\Http\Controllers;

use App\Models\Dvd;
use App\Http\Requests\StoreDvdRequest;
use App\Http\Requests\UpdateDvdRequest;
use Illuminate\Support\Facades\DB;

class DvdController extends Controller
{

    public function __construct() {
        $this->title = "DVD";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen '.$this->title;
        // dd($title);
        
        $dvds = Dvd::select(
            'kode_kaset', 'judul_film', 
            'genre', 'stok_dvd', 
            'tahun_rilis_film', 'harga_sewa', 
            'bahasa.nama_bahasa as bahasa'
        )
        ->leftJoin('bahasa','bahasa.id_bahasa','dvd.id_bahasa')
        ->orderBy('kode_kaset')
        ->get();

        // dd($dvd);

        return view('pages.dvd.index', compact('title', 'dvds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambahkan '.$this->title;

        $genres = DB::table('genre')->get();
        $bahasas = DB::table('bahasa')->get();
        // dd($genres);

        return view('pages.dvd.create', compact('title','genres','bahasas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDvdRequest $request)
    {
        $parameters = $request->validated();
        // dd($parameters);
        Dvd::create($parameters);

        return redirect()->route('dvd.index')->with('success','Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dvd $dvd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dvd $dvd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDvdRequest $request, Dvd $dvd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dvd $dvd)
    {
        //
    }
}
