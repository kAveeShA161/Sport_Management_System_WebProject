<?php

namespace App\Http\Controllers;

use App\Models\SportTeam;
use Illuminate\Http\Request;

class UserSportTeamController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all sport team records with relationships
        $query = SportTeam::with(['coach', 'student']);

        // Get all unique sport names for the dropdown
        $sportsList = SportTeam::pluck('sport_name')->unique()->values();

        // Apply filter if search term exists
        $selectedSport = $request->get('search');
        if ($selectedSport) {
            $query->where('sport_name', $selectedSport);
        }

        // Get and group the results
        $sports = $query->get()->groupBy('sport_name');

        return view('sports.index', [
            'sports' => $sports,
            'sportsList' => $sportsList,
            'selectedSport' => $selectedSport,
        ]);
    }
}

