<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create(): View
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request): RedirectResponse
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

    public function edit($id): View
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id): RedirectResponse
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

        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil diubah!');
    }

    public function destroy(Mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Data berhasil dihapus!');
    }
}