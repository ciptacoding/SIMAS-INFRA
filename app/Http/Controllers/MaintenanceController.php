<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\Team;
use App\Models\Tower;

class MaintenanceController extends Controller
{
    // method untuk menampilkan halaman utama maintenance
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('Pages.Maintenance.Index', compact('maintenances'));
    }

    // method untuk menampilkan halaman detail maintenance
    public function detail($id)
    {
        $maintenance = Maintenance::findOrFail($id);
        return view('Pages.Maintenance.Detail', compact('maintenance'));
    }

    // method untuk menampilkan form tambah maintenance
    public function tambah()
    {
        $teams = Team::all();
        $towers = Tower::all();
        return view('Pages.Maintenance.Tambah', compact('teams', 'towers'));
    }

    // method untuk menyimpan hasil dari tambah maintenance
    public function simpan(Request $request)
    {
        $request->validate([
            'team_id' => ['required'],
            'tower_id' => ['required'],
            'tanggal' => ['required', 'date'],
            'keterangan' => ['required', 'max:255'],
            'rincian_perbaikan' => ['required']
        ]);

        Maintenance::create([
            'team_id' => $request->team_id,
            'tower_id' => $request->tower_id,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'rincian_perbaikan' => $request->rincian_perbaikan,
            'status' => 'Sedang direview'
        ]);

        return redirect()->route('maintenance.index');
    }

    // method untuk melakukan delete item maintenance
    public function delete($id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $maintenance->delete();
        return redirect()->route('maintenance.index');
    }
}
