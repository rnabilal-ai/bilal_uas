<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data jenis
        $nomor = 1;
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        return view('jenis.form'); // huruf kecil: folder 'jenis', file 'form.blade.php'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $jenis = new Jenis();
        // $jenis->id = $request->id; // tidak perlu, karena auto increment
        $jenis->nm_jenis = $request->nm_jenis;
        $jenis->harga = $request->harga;
        $jenis->save();

        return redirect('/jenis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // ambil data berdasarkan id
        $jenis = Jenis::find($id);
        return view('jenis.edit', compact('jenis')); // huruf kecil: 'jenis.edit'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses update
        $jenis = Jenis::find($id); // cari data lama
        $jenis->nm_jenis = $request->nm_jenis;
        $jenis->harga = $request->harga;
        $jenis->save();

        return redirect('/jenis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus data
        $jenis = Jenis::find($id); // bukan $pelanggan
        $jenis->delete();

        return redirect('/jenis');
    }
}
