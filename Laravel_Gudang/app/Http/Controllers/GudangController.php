<?php

namespace App\Http\Controllers;

use App\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudang = Gudang::all();
        return view('admin.tampil', compact('gudang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'no_invoice' => 'required|size:7',
            'nama_brang' => 'required',
            'alamat_barang' => 'required',
            'deskripsi_barang' => 'required'

        ]);

        Gudang::create($request->all());
        return redirect('/gudang')->with('status', 'Data Barang Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $gudang)
    {
        return view('admin.show', compact('gudang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gudang $gudang)
    {
        return view('admin.edit', compact('gudang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gudang $gudang)
    {
        Gudang::where('id', $gudang->id)
            ->update([

                'no_invoice' => $request->no_invoice,
                'nama_brang' => $request->nama_brang,
                'jenis_barang' => $request->jenis_barang,
                'alamat_barang' => $request->alamat_barang,
                'deskripsi_barang' => $request->deskripsi_barang

            ]);
        return redirect('/gudang')->with('status', 'Data Barang Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gudang $gudang)
    {
        Gudang::destroy($gudang->id);
        return redirect('/gudang')->with('status', 'Data Barang Berhasil Di Hapus');
    }
}
