<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Coach;
use App\Models\SportTeam;
use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coachCount = Coach::count();
        $userCount = User::count();
        $uniqueSportsCount = SportTeam::distinct('sport_name')->count('sport_name');

        $latestNews = News::latest()->take(2)->get();

        return view('home', compact('coachCount', 'userCount', 'uniqueSportsCount', 'latestNews'));
    }

    public function home()
    {
        $latestNews = News::latest()->take(2)->get();
        return view('home', compact('latestNews'));
    }
}
