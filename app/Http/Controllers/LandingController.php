<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coach;
use App\Models\SportTeam;

class LandingController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $coachCount = Coach::count();
        $uniqueSportsCount = SportTeam::distinct('sport_name')->count('sport_name');

        return view('landing', compact('userCount', 'coachCount', 'uniqueSportsCount'));
    }
}
