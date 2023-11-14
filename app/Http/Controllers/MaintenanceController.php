<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('Pages.Maintenance.Index', compact('maintenances'));
    }

    public function detail($id)
    {
    }

    public function tambah()
    {
    }

    public function simpan(Request $request)
    {
    }

    public function edit(Request $request, $id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
    }
}
