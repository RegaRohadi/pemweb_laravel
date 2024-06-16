<?php

namespace App\Http\Controllers;

use App\Models\Speedrun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeedrunController extends Controller
{
    
    public function rank()
    {
        $speedruns = DB::table('speedruns')->orderBy('completion_time')->get();
        return view('rank', ['speedruns' => $speedruns]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'player_name' => 'required',
            'completion_time' => 'required|numeric',
        ]);

        Speedrun::create($request->all());
        return redirect()->route('rank')->with('success', 'Speedrun recorded successfully.');
    }
}
