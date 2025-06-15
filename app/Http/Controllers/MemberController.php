<?php
    
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.members.index', compact('students'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'student_name'    => 'required|string|max:255',
            'student_email'   => 'required|email|unique:students,student_email',
            'student_contact' => 'required|string|max:20',
            'photo'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',

        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('member_photos', 'public');
            $data['photo'] = $photoPath;
        }

        Student::create($data);

        return redirect()->route('admin.members.index')->with('success', 'Member added successfully.');
    }

    public function edit($id)
{
        $student = Student::findOrFail($id); // or Member::findOrFail($id), depending on your model
        return view('admin.members.edit', compact('student'));
    }

    public function update(Request $request, $id)
        {
            // Validate incoming data
            $validated = $request->validate([
                'student_name' => 'required|string|max:255',
                'student_email' => 'required|email',
                'student_contact' => 'required|string|max:15',
                'photo'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);

            // Find the member by ID
            $member = Student::findOrFail($id);
            $data = $request->all();

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($member->photo && Storage::disk('public')->exists($member->photo)) {
                Storage::disk('public')->delete($member->photo);
            }

            $photoPath = $request->file('photo')->store('member_photos', 'public');
            $data['photo'] = $photoPath;
        }

        $member->update($data);

        return redirect()->route('admin.members.index')->with('success', 'Member updated successfully.');
    }

        public function destroy($id)
            {
        $member = Student::findOrFail($id);

        if ($member->photo && Storage::disk('public')->exists($member->photo)) {
            Storage::disk('public')->delete($member->photo);
        }

        $member->delete();

        return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully.');
    }


}