<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftars = Pendaftar::all();

        return view('data', compact('pendaftars'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'posisi' => 'required',
            'alamat' => 'required'
        ]);

        Pendaftar::create($data);

        return redirect()->route('pendaftar.index')
            ->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Pendaftar $pendaftar)
    {
        return view('form', compact('pendaftar'));
    }

    public function update(Request $request, Pendaftar $pendaftar)
    {
        $data = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'posisi' => 'required',
            'alamat' => 'required'
        ]);

        $pendaftar->update($data);

        return redirect()->route('pendaftar.index')
            ->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Pendaftar $pendaftar)
    {
        $pendaftar->delete();

        return redirect()->route('pendaftar.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
