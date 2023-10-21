<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('student.index', compact('exams'));
    }

    public function viewstudent()
    {
        $students = User::where('is_Admin', 0)->get();
        return view('admin.student.view', compact('students'));
    }
    public function addstudent()
    {
        return view('admin.student.add');
    }

    public function storestdent(StudentRequest $request)
    {
        User::create([
            'user_name' => $request->user_name,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Session::flash('success', 'The student has been added successfully');
        return redirect()->back();
    }
    public function editstudent($id)
    {
        $student = User::find($id);
        return view('admin.student.edit', compact('student'));
    }
    public function updatestudent(Request $request, $id)
    {
        $request->validate([
            'user_name' => 'required|string|max:60',
            'name' => 'required|string|max:60',
            'email' => 'required|string|email'
        ]);
        $student = User::findOrfail($id);
        $student->update([
            'user_name' => $request->input('user_name'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        Session::flash('success', 'Data has been modified successfully');
        return redirect()->back();
    }
        
}
