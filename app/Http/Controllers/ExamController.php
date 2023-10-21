<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function index()
    {
        $exams = Exam::all();
        return view('admin.exam.view', compact('exams'));
    }
    public function storeexam(Request $request)
    {
        $request->validate([
            'title' => 'string|max:60|required'
        ]);

        $exam = Exam::create([
            'title' => $request->title
        ]);
        return redirect()->route('admin.add.question', ['exam_id' => $exam->id]);
    }



    public function viewexam($id)
    {
        $questions = Question::where('exam_id', $id)->get();
        return view('student.exam', compact('questions'));
    }



    public function viewquestion($id)
    {
        $question = Question::find($id);
        return view('student.viewquestion', compact(['question']));
    }


    public function storequestion(Request $request)
    {

        $questionId = $request->input('question_id');
        $selectedChoice = $request->input('selected_choice');

        // استرداد قيم الأسئلة والإجابات المحفوظة من الجلسة (إذا كانت موجودة)
        $selectedChoices = session()->get('selected_choices', []);

        // حفظ رقم السؤال والإجابة في المصفوفة
        $selectedChoices[$questionId] = $selectedChoice;

        // حفظ المصفوفة المحدثة في الجلسة
        session()->put('selected_choices', $selectedChoices);


        return redirect()->route('stt', 'questionId');
    }

    public function showQuestion($questionId)
    {
        $selectedChoices = session()->get('selected_choices', []);
        $selectedChoice = $selectedChoices[$questionId] ?? null;
        dd($selectedChoice);
    }
}
