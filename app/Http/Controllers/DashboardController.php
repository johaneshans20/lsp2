<?php

namespace App\Http\Controllers;

use App\Models\Data_mahasiswa;
use App\Models\Status;
use App\Models\User;

use App\Models\Kursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'dmaha' => Data_mahasiswa::get()
        ]);
    }
    public function data_Mahasiswa()
    {
        $mhs = User::where('role_id', 0)->get();
        $datamhs = User::where('role_id', 0)->first();
        $mhs1 = Data_mahasiswa::where('id_user', $datamhs->id)->get();
        // return $datamhs->id;
        // return $mhs1;
        $title = 'Data Mahasiswa';
        return view('dashboard.datamahasiswa', compact('mhs', 'mhs1', 'title'));
    }

    public function tmbhMhs()
    {
        return view('dashboard.tambahmahasiswa', [
            'title' => 'Tambah Mahasiswa'
        ]);
    }

    public function tmbhdataMhs(Request $request)
    {
        // return $request;
        $validatedData = $request->all();
        // $validatedData = $request->validate([
        //     'name' => ['required', 'max:30'],
        //     'npm' => ['required'],
        //     'password' => ['required', 'min:5', 'max:20'],
        // ]);
        $validatedData['role_id'] = 0;
        $validatedData['password'] = Hash::make($validatedData['password']);
        // return $validatedData;
        User::create($validatedData);
        return redirect('/dataMahasiswa')->with('success', 'berhasil menambahkan mahasiswa!');
    }

    public function editmhs($id)
    {
        $datamhs = User::findOrFail($id);
        // return $datamhs;
        $title = 'Edit Mahasiswa';
        return view('dashboard.editdatamhs', compact('datamhs', 'title'));
    }
    public function ubahmhs(Request $request, $id)
    {
        // return $id;
        // $dataLama = User::findOrFail($id);
        $datamhs = $request->validate([
            'name' => 'required',
            'npm' => 'required',
            'kelas' => 'required',
        ]);
        User::where('id', $id)->update($datamhs);
        return redirect('/dataMahasiswa')->with('success', 'berhasil menambahkan mahasiswa!');
    }
    public function dataPngjn()
    {
        $datamhs = User::where('role_id', 0)->first();
        $mhs1 = Data_mahasiswa::where('id_user', $datamhs->id)->get();
        $title = 'Data pengajuan';
        return view('dashboard.dataPengajuan', compact('title', 'mhs1'));
    }
    public function pgjn()
    {
        return view('dashboard.pengajuan', [
            'title' => 'Daftar Kursus',
            'kursus' => Data_mahasiswa::where('id_user', Auth::user()->id)->get()
        ]);
    }

    public function tmbhpgjn()
    {
        return view('dashboard.tambahpengajuan', [
            'title' => 'Tambah pengajuan',
            'kursus' => Kursus::get()
        ]);
    }

    public function tmbhdatapgjn(Request $request)
    {

        $dataKursus = $request->validate([
            'id_kursus' => 'required'
        ]);
        $request->hasFile('nama_dokumen');
        $path = storage_path('app/public/file/');
        $file = $request->file('nama_dokumen');
        $name =  uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);
        $dataKursus['nama_dokumen'] = $name;
        $dataKursus['id_user'] = Auth::user()->id;
        // return $dataKursus;
        Data_mahasiswa::create($dataKursus);
        return redirect('/pengajuan')->with('success', 'Berhasil menambahkan pengajuan!');
    }

    public function konfirmasi($id_user)
    {
        $ubahstatus = User::findOrFail($id_user);
        $ubahstatus->status = 1;
        $ubahstatus->save();
        return redirect('/dasbor')->with('success', 'Berhasil mengubah status!');
        // return $ubahstatus;
    }

    public function hapusMHS($id)
    {
        $datamhs = User::findOrFail($id);
        // return $datamhs;
        $dataMHS = Data_mahasiswa::where('id_user', $datamhs->id)->first();
        $datamahasiswa = Data_mahasiswa::where('id_user', $datamhs->id)->first();
        if (!empty($datamahasiswa)) {
            if ($dataMHS->nama_dokumen) {
                $path = storage_path('app/public/file/' . $dataMHS->nama_dokumen);
                unlink($path);
            }
            Data_mahasiswa::where('id_user', $datamhs->id)->delete();
        }
        User::where('id', $datamhs->id)->delete();
        return redirect('/dataMahasiswa')->with('success', 'Berhasil Dihapus!');
    }
}
