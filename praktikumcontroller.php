<?php

namespace App\Http\Controllers;

use App\Models\Praktikum;
use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    // Halaman Dashboard (CRUD Mahasiswa)
    public function index()
    {
        return view('dashboard');
    }

    // Halaman Home
    public function home()
    {
        return view('home');
    }

    // Halaman Ticket
    public function ticket()
    {
        return view('ticket');
    }

    // Halaman About Me
    public function about()
    {
        return view('about');
    }

    // --- API FUNCTIONS (Biarkan tetap sama seperti sebelumnya) ---
    public function apiIndex()
    {
        $data = Praktikum::orderBy('created_at', 'desc')->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nbi' => 'required',
            'kelas' => 'required',
            'praktikum' => 'required',
            'sesi' => 'required',
        ]);
        $praktikum = Praktikum::create($request->all());
        return response()->json($praktikum);
    }

    public function update(Request $request, $id)
    {
        $praktikum = Praktikum::find($id);
        if ($praktikum) {
            $praktikum->update($request->all());
            return response()->json($praktikum);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    public function destroy($id)
    {
        $praktikum = Praktikum::find($id);
        if ($praktikum) {
            $praktikum->delete();
            return response()->json(['message' => 'Berhasil dihapus']);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}