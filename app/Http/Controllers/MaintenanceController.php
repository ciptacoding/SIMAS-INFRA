<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Tower;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MaintenanceController extends Controller
{
    // method untuk menampilkan halaman utama maintenance
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('Pages.Maintenance.Index', compact('maintenances'));
    }

    // method untuk menampilkan halaman detail maintenance
    public function generatePenugasan($id)
    {
        $suratTugas = Maintenance::findOrFail($id);
        $pdf = Pdf::loadView('Pages.Maintenance.SuratTugas', compact('suratTugas'));
        return $pdf->download('SuratTugas.pdf');
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

        return redirect()->route('maintenance.notification');
    }

    public function notification()
    {

        $superAdmin = User::where('role_id', '1')->first(); //ganti sesuai nomor wa superadmin
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $superAdmin->whatsapp,
                'message' => 'Hallo, ada notifikasi request maintenance baru nih', //sesuaikan pesan
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: cdQtA3F3MnNJmFVqgXk!' //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
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
