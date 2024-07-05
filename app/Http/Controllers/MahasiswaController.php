<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_mahasiswa' => 'required|min:4',
            'ktm' => 'required|min:8',
            'kelas' => 'required',
            'kategori_masalah' => 'required',
            'masalah' => 'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil dibuat!');
    }

    public function edit($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('mahasiswas.edit', compact('mahasiswas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_mahasiswa' => 'required|min:4',
            'ktm' => 'required|min:8',
            'kelas' => 'required',
            'kategori_masalah' => 'required',
            'masalah' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswas.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        $mahasiswas->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil dihapus!');
    }
}
