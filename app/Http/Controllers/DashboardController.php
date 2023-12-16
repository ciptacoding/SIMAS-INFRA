<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tower;
use App\Models\AsetTower;
use App\Models\Team;
use App\Models\Maintenance;
use App\Models\Notification;
use App\Models\Laporan;

class DashboardController extends Controller
{
    public function index()
    {
        $pengguna = User::count();
        $dataTower = Tower::count();
        $asetTower = AsetTower::count();
        $team = Team::count();
        $maintenance = Maintenance::count();
        $laporan = Laporan::count();
        return view('Pages.Dashboard.Index', compact('pengguna', 'dataTower', 'asetTower', 'team', 'maintenance', 'laporan'));
    }
}
