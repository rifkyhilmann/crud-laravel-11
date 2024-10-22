<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function pages() {
        $mahasiswa = Mahasiswa::all();
        return view('pages', compact('mahasiswa')); 
    }

    function TambahData() {
        return view('tambahData');
    }

    function TambahDataSubmit(Request $request) {
        $mahasiswa = new Mahasiswa();
        $mahasiswa -> NIM = $request -> NIM;
        $mahasiswa -> Nama = $request -> Nama;
        $mahasiswa -> Alamat = $request -> Alamat;
        $mahasiswa -> Kelas = $request -> Kelas;
        $mahasiswa -> save();

        return redirect()->route('pages');
    }

    function UpdateData(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);

        return view('updateData', compact('mahasiswa'));
    }

    function UpdateDataSubmit(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> NIM = $request -> NIM;
        $mahasiswa -> Nama = $request -> Nama;
        $mahasiswa -> Alamat = $request -> Alamat;
        $mahasiswa -> Kelas = $request -> Kelas;
        $mahasiswa -> update();

        return redirect()->route('pages');
    }

    function DeleteData($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();

        return redirect()->route('pages');
    }
}
