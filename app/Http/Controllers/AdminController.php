<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Exam;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }
    public function viewquestion_exam($exam_id)
    {
        $questions = Exam::find($exam_id)->questions()->get();
        return view('admin.question.view', compact('questions'));
    }

    public function addquestion($exam_id)
    {
        return view('admin.question.add', compact('exam_id'));
    }


    public function questionstore(Request $request, $exam_id)
    {
        // dd($request);
        Question::create([
            'question_text' => $request->input('question_text'),
            'answer' => $request->input('answer'),
            'mark' => $request->input('mark'),
            'choices' => $request->input('choices'),
            'exam_id' => $exam_id,
        ]);
        return back()->with('success', 'The question has been added successfully');
    }

    public function deletequestion($question_id)
    {
        Question::find($question_id)->delete();

        return back()->with('success', 'The question has been deleted successfully');
    }
}
