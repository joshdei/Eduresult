<?php

namespace App\Http\Controllers;

use App\Models\{Question, Subject};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class QuestionController extends Controller
{
    public function view(){
        return view('question.view');
    }

    public function add(){
        Subject::all();
        $user = Auth::user();
        $subjects = Subject::where('userid', $user->id)->get();
    return view('question.add', compact('subjects'));
    }


    public function postquestions(Request $request)
{
    if ($request->has('number_of_questions')) {
        $number_of_questions = $request->input('number_of_questions'); 
        $selected_subjects = $request->input('subjects', []);

        return view('selection.add', compact('number_of_questions', 'selected_subjects'));
    } else {
        return redirect()->back()->with('error', 'Please enter the number of questions.');
    }
}



public function uploadquestions(Request $request)
{
    $request->validate([
        'userid' => 'required|exists:users,id',
        'subjects' => 'required|array',
        'questions' => 'required|array',
        'section_of_question' => 'required|string|max:255',
    ]);

    foreach ($request->input('questions') as $questionData) {
        Question::create([
            'userid' => $request->userid,
            'section_of_question' =>$request->section_of_question,
            'subject_id' => array_key_first($request->subjects), // Assuming one subject
            'question' => $questionData['question'],
            'option_a' => $questionData['A'],
            'option_b' => $questionData['B'],
            'option_c' => $questionData['C'],
            'option_d' => $questionData['D'],
        ]);
    }

    return redirect()->route('addquestions')->with('succes', 'Please select the number of questions!');
}

    
}
