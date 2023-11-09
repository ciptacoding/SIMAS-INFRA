<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        return view('Pages.Tower.Index');
    }

    public function create($latitude, $longtitude)
    {
        $dataLocation = [
            "latitude" => $latitude,
            "longtitude" => $longtitude,
        ];
        return view('Pages.Tower.Create', compact('dataLocation'));
    }
}
