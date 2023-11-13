<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetTower;
use App\Models\Tower;

class AsetTowerController extends Controller
{
    public function index()
    {
        $assetsTower = AsetTower::all();
        return view('Pages.AsetTower.Index', compact('assetsTower'));
    }

    public function detail()
    {
    }

    public function tambah()
    {
        $towers = Tower::all();
        return view('Pages.AsetTower.Tambah', compact('towers'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'tower_id' => ['required'],
            'nama_sparepart' => ['required', 'max:255'],
            'keterangan' => ['required', 'max:255']
        ]);

        AsetTower::create([
            'tower_id' => $request->tower_id,
            'nama_sparepart' => $request->nama_sparepart,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('aset.index');
    }

    public function edit($id)
    {
        $towers = Tower::whereNotIn('id', function ($query) {
            $query->select('tower_id')->from((new AsetTower)->getTable());
        })->get();
        $asetTower = AsetTower::findOrFail($id);
        return view('Pages.AsetTower.Edit', compact('asetTower', 'towers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tower_id' => ['required'],
            'nama_sparepart' => ['required', 'max:255'],
            'keterangan' => ['required', 'max:255']
        ]);

        $asetTower = AsetTower::findOrFail($id);

        $asetTower->update([
            'tower_id' => $request->tower_id,
            'nama_sparepart' => $request->nama_sparepart,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('aset.index');
    }

    public function delete($id)
    {
        $asetTower = AsetTower::findOrFail($id);
        $asetTower->delete();
        return redirect()->route('aset.index');
    }
}
