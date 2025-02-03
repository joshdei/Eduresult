<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Question,
    Subject};
class PreviewController extends Controller
{
  
        public function question()
        {
            $user = Auth::user();
            $data = Subject::where('userid', $user->id)->get();
            return view('preview.question', compact('data'));
        }
    
        public function getQuestions(Request $request)
        {
            $questions = Question::where('subject_id', $request->subject_id)->get(['question']);
            return response()->json($questions);
        }
   
        public function preview(Request $request)
        {
            // Validate the ID from the request
            $validated = $request->validate([
                'id' => 'required|exists:subjects,id',
            ]);
        
            // Get the logged-in user
            $user = Auth::user();
        
            // Fetch the subject data for the logged-in user
            $subject = Subject::where('id', $request->id)->where('userid', $user->id)->first();
        
            // If the subject does not exist, return an error
            if (!$subject) {
                return redirect()->back()->with('error', 'Subject not found.');
            }
        
            // Fetch questions related to this subject and user
            $questions = Question::where('subject_id', $request->id)->where('userid', $user->id)->get();
        
            // Pass the subject and questions to the view
            return view('preview.preview', compact('subject', 'questions'));
        }
        
    
}
