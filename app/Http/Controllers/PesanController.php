<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{

    public function index()
    {
        $pesans = Pesan::latest()->paginate(10);
        return view('admin.pesan.index', compact('pesans'));
    }

    // Simpan pesan dari form pengunjung
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'whatsapp' => 'nullable|string|max:20',
            'pesan' => 'required|string',
        ]);

        Pesan::create($request->all());

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    // Hapus pesan
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        return redirect()->route('pesan.index')->with('success', 'Pesan berhasil dihapus!');
    }
}

