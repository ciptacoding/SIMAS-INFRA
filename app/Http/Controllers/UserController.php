<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    }

    public function activated(string $id)
    {
    }
}
