<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        return view('Pages.Tower.Index');
    }
}
