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
    }

    // method untuk menampilkan form edit maintenance
    public function edit(Request $request, $id)
    {
    }

    // method untuk menyimpan hasil edit maintenance
    public function update(Request $request, $id)
    {
    }

    // method untuk melakukan delete item maintenance
    public function delete($id)
    {
    }
}
