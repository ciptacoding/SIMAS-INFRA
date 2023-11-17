<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;

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
        $ketuaTim = User::where('role_id', 3)->whereNotIn('id', function ($query) {
            $query->select('ketua_tim')->from((new Team)->getTable());
        })->get();

        return view('Pages.Team.Tambah', compact('ketuaTim'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'ketua_tim' => ['required', 'unique:teams,ketua_tim'],
            'nama_team' => ['required', 'max:255'],
            'tugas' => ['required', 'max:255'],
            'jumlah_anggota' => ['required', 'max:255'],
        ]);

        Team::create([
            'ketua_tim' => $request->ketua_tim,
            'nama_team' => $request->nama_team,
            'tugas' => $request->tugas,
            'jumlah_anggota' => $request->jumlah_anggota,
        ]);

        return redirect()->route('teams.index');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $ketuaTim =
            User::where('role_id', 3)->whereNotIn('id', function ($query) {
                $query->select('ketua_tim')->from((new Team)->getTable());
            })->get();
        return view('Pages.Team.Edit', compact('team', 'ketuaTim'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ketua_tim' => ['required'],
            'nama_team' => ['required', 'max:255'],
            'tugas' => ['required', 'max:255'],
            'jumlah_anggota' => ['required', 'max:255'],
        ]);

        $team = Team::findOrFail($id);

        $team->update([
            'ketua_tim' => $request->ketua_tim,
            'nama_team' => $request->nama_team,
            'tugas' => $request->tugas,
            'jumlah_anggota' => $request->jumlah_anggota,
        ]);

        return redirect()->route('teams.index');
    }

    public function delete($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('teams.index');
    }
}
