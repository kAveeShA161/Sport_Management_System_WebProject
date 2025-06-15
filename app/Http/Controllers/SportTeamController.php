<?php

namespace App\Http\Controllers;

use App\Models\SportTeam;
use App\Models\Coach;
use App\Models\Student;
use Illuminate\Http\Request;

class SportTeamController extends Controller
{
    public function index(Request $request)
    {
        $query = SportTeam::with(['coach', 'student']);

        // Search by sport name
        if ($request->has('search') && $request->search != '') {
            $query->where('sport_name', 'like', '%' . $request->search . '%');
        }

        // Get and group teams by sport name
        $sports = $query->get()->groupBy('sport_name');

        return view('admin.Teams.index', ['teams' => $sports]);
    }


    public function create()
    {
        $coaches = Coach::all();
        $students = Student::all();
        return view('admin.teams.create', compact('coaches', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sport_name' => 'required|string|max:255',
            'coach_id' => 'required|exists:coaches,id',
            'student_id' => 'required|exists:students,id',
            'student_role' => 'required|string|max:255',
        ]);

        SportTeam::create([
            'sport_name' => $request->sport_name,
            'coach_id' => $request->coach_id,
            'student_id' => $request->student_id,
            'student_role' => $request->student_role,
        ]);

        return redirect()->route('admin.teams.index')->with('success', 'Team created successfully.');
    }

    

    public function edit($id)
    {
        $team = SportTeam::with(['coach', 'student'])->findOrFail($id);
        $coaches = Coach::all();
        $students = Student::all();
        return view('admin.teams.edit', compact('team', 'coaches', 'students'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sport_name' => 'required|string|max:255',
            'coach_id' => 'required|exists:coaches,id',
            'student_id' => 'required|exists:students,id',
            'student_role' => 'required|string|max:255',
        ]);

        $team = SportTeam::findOrFail($id);
        $team->update([
            'sport_name' => $request->sport_name,
            'coach_id' => $request->coach_id,
            'student_id' => $request->student_id,
            'student_role' => $request->student_role,
        ]);

        return redirect()->route('admin.teams.index')->with('success', 'Team updated successfully!');
    }

    public function destroy($id)
    {
        $team = SportTeam::findOrFail($id);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team deleted successfully!');
    }
}
