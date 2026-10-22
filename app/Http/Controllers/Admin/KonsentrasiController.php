<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konsentrasi;
use Illuminate\Http\Request;

class KonsentrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_konsentrasi'] = Konsentrasi::all();
        return view('admin.data-konsentrasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data-konsentrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $konsentrasi = new Konsentrasi();
        $konsentrasi->kode_konsentrasi = request('kode_konsentrasi');
        $konsentrasi->nama_konsentrasi = request('nama_konsentrasi');
        $konsentrasi->deskripsi = request('deskripsi');
        $konsentrasi->save();

        return redirect('admin/data-konsentrasi')->with('success', 'Data berhasil ditambahkan');    

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
