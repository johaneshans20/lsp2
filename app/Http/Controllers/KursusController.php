<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dataKursus', [
            'title' => 'Daftar Kursus',
            'kursus' => Kursus::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahDataKursus', [
            'title' => 'Tambah Data Kursus'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $dataKursus = $request->validate([
            'nama_kursus' => ['required', 'max:30'],
            'deskripsi_kursus' => ['required', 'max:30'],
            'waktu' => ['required', 'date'],
            'lama_kursus' => ['required', 'max:3']
        ]);
        Kursus::create($dataKursus);
        return redirect('/dataKursus')->with('success', 'Data Kursus berhasil di simpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kursus = Kursus::findOrFail($id);
        return view('dashboard.editKursus', [
            'title' => 'Edit Kursus',
            'kursus' => $kursus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataKursus = $request->validate([
            'nama_kursus' => ['required', 'max:30'],
            'deskripsi_kursus' => ['required', 'max:30'],
            'waktu' => ['required', 'date'],
            'lama_kursus' => ['required', 'max:3']
        ]);
        Kursus::whereId($id)->update($dataKursus);
        return redirect('/dataKursus')->with('success', 'Data Kursus berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kursus::where('id', $id)->delete();
        return redirect('/dataKursus')->with('success', 'Data Kursus berhasil di hapus!');
    }
}
