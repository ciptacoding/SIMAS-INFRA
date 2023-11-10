<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        $towers = Tower::all();
        return view('Pages.Tower.Index', compact('towers'));
    }

    public function markers()
    {
        $markers = Tower::all();
        return response()->json($markers);
    }

    public function tambah($latitude, $longtitude)
    {
        $dataLocation = [
            "latitude" => $latitude,
            "longtitude" => $longtitude,
        ];
        return view('Pages.Tower.Tambah', compact('dataLocation'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_tower' => ['required', 'max:255'],
            'lokasi_tower' => ['required', 'max:255'],
            'latitude' => ['required'],
            'longtitude' => ['required'],
            'status_tower' => ['required', 'max:255']
        ]);

        Tower::create([
            'nama_tower' => $request->nama_tower,
            'lokasi_tower' => $request->lokasi_tower,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'status_tower' => $request->status_tower,
        ]);

        return redirect()->route('tower.index');
    }
}
