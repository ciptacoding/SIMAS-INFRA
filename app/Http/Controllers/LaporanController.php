<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

    public function download($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pdf = Pdf::loadView('Pages.Laporan.LaporanPdf', compact('laporan'));
        return $pdf->download('LaporanPdf.pdf');
    }

    public function tambah()
    {
        return view('Pages.Laporan.Tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'jenis_laporan' => ['required'],
            'judul' => ['required', 'max:255'],
            'tanggal' => ['required'],
            'content' => ['required'],
        ]);

        Laporan::create([
            'user_id' => Auth::user()->id,
            'jenis_laporan' => $request->jenis_laporan,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'content' => $request->content,
        ]);

        return redirect()->route('laporan.tambah')->with('success', 'Laporan Berhasil Dibuat!');
    }

    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);

        return view('Pages.Laporan.Edit', compact('laporan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_laporan' => ['required'],
            'judul' => ['required', 'max:255'],
            'tanggal' => ['required'],
            'content' => ['required'],
        ]);

        $laporan = Laporan::findOrFail($id);

        $laporan->update([
            'user_id' => Auth::user()->id,
            'jenis_laporan' => $request->jenis_laporan,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'content' => $request->content,
        ]);

        return Redirect::to(url()->previous())->with('success', 'Laporan berhasil diupdate!');
    }

    public function delete($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return Redirect::to(url()->previous());
    }
}
