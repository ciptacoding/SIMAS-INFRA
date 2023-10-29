<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Pages.Pengguna.Index', compact('users'));
    }

    public function disabled(string $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => false,
        ]);

        return redirect()->route('users.index');
    }

    public function activated(string $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => true,
        ]);

        return redirect()->route('users.index');
    }

    public function tambah()
    {
        $roles = Role::all();
        return view('Pages.Pengguna.Tambah', compact('roles'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'username' => ['required', 'max:255', 'unique:users,username'],
            'email' => ['required', 'max:255', 'email', 'unique:users,email'],
            'role_id' => ['required'],
            'whatsapp' => ['required', 'min:4', 'max:20'],
            'foto' => ['image', 'max:2048', 'mimes:jpg,png,jpeg'],
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->hashName();
            $file->storeAs('public/profiles/', $fileName);
        } else {
            $fileName = null;
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt('12345678'),
            'status' => true,
            'role_id' => $request->role_id,
            'whatsapp' => $request->whatsapp,
            'foto' => $fileName,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        return redirect()->route('users.index');
    }
}
