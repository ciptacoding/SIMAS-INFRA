<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('Pages.Team.Index', compact('teams'));
    }

    public function detail($id)
    {
    }

    public function tambah()
    {
        return view('Pages.Team.Tambah');
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
