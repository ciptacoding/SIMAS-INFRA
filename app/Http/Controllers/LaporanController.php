<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function maintenance()
    {
        $maintenances = Laporan::where('jenis_laporan', 'maintenance')->get();
        return view('Pages.Laporan.Maintenance', compact('maintenances'));
    }

    public function sparepart()
    {
        $spareparts = Laporan::where('jenis_laporan', 'sparepart')->get();
        return view('Pages.Laporan.Sparepart', compact('spareparts'));
    }

    public function reqMaintenance()
    {
        $reqMaintenances = Laporan::where('jenis_laporan', 'requestMaintenance')->get();
        return view('Pages.Laporan.Request', compact('reqMaintenances'));
    }

    public function lokasi()
    {
        $locations = Laporan::where('jenis_laporan', 'lokasi')->get();
        return view('Pages.Laporan.Lokasi', compact('locations'));
    }

    public function team()
    {
        $teams = Laporan::where('jenis_laporan', 'team')->get();
        return view('Pages.Laporan.Team', compact('teams'));
    }

    public function tambah()
    {
        return view('Pages.Laporan.Tambah');
    }

    public function simpan(Request $request)
    {
    }

    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);

        return view('Pages.Laporan.Edit', compact('laporan'));
    }

    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
    }
}
