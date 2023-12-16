<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Maintenance::orderByDesc('tanggal')->get();
        return view('Pages.Notification.Index', compact('notifications'));
    }

    public function detail($id)
    {
        $notification = Maintenance::findOrFail($id);
        return view('Pages.Notification.Detail', compact('notification'));
    }

    public function accept($id)
    {
        $notification = Maintenance::findOrFail($id);
        $notification->update([
            'status' => 'disetujui'
        ]);

        $operator = User::where('role_id', '2')->first(); //ganti sesuai nomor wa superadmin
        $ketua_tim = $notification->team->user->whatsapp;
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
                'target' => $operator->whatsapp . ',' . $ketua_tim,
                'message' => 'Hallo, ada notifikasi hasil dari request maintenance telah disetujui oleh super admin dan surat tugas sudah digenerate. Silakan download surat tugas pada menu maintenance.', //sesuaikan pesan
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: cdQtA3F3MnNJmFVqgXk!' //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
        return redirect()->route('notification.index');
    }

    public function decline($id)
    {
        $notification = Maintenance::findOrFail($id);
        $notification->update([
            'status' => 'ditolak'
        ]);

        $operator = User::where('role_id', '2')->first(); //ganti sesuai nomor wa superadmin
        $ketua_tim = $notification->team->user->whatsapp;
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
                'target' => "$operator->whatsapp, $ketua_tim",
                'message' => 'Hallo, ada notifikasi hasil dari request maintenance, sayang sekali permintaan ditolak oleh super admin.', //sesuaikan pesan
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: cdQtA3F3MnNJmFVqgXk!' //change TOKEN to your actual token
            ),
        ));
        return redirect()->route('notification.index');
    }
}
