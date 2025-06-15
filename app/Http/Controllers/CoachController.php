<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();
        return view('admin.coaches.index', compact('coaches'));
    }

    public function create()
    {
        return view('admin.coaches.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'coach_name'        => 'required|string|max:255',
            'sport'             => 'required|string|max:100',
            'telephone_number'  => 'required|string|max:20',
            'email'             => 'required|email|unique:coaches,email',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('coach_photos', 'public');
            $data['photo'] = $photoPath;
        }

        Coach::create($data);

        return redirect()->route('admin.coaches.index')->with('success', 'Coach added successfully.');
    }

    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('admin.coaches.edit', compact('coach'));
    }

    public function update(Request $request, $id)
    {
        $coach = Coach::findOrFail($id);

        $request->validate([
            'coach_name'        => 'required|string|max:255',
            'sport'             => 'required|string|max:100',
            'telephone_number'  => 'required|string|max:20',
            'email'             => 'required|email|unique:coaches,email,' . $coach->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('coach_photos', 'public');
            $data['photo'] = $photoPath;
        }

        $coach->update($data);

        return redirect()->route('admin.coaches.index')->with('success', 'Coach added successfully.');
    }

    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();

        return redirect()->route('admin.coaches.index')->with('success', 'Coach deleted successfully.');
    }
}
