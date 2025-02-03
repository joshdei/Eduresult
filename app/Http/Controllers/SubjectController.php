<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Subject;
class SubjectController extends Controller
{

    public function addSubject(){
       
            return view('subject.add');
    }

    //this is to upload subject into the database
    public function postSubject(Request $request) {
        // Validate the incoming request
        $request->validate([
            'subject_name' => 'required|string|max:255',
            'sections' => 'required|array',
            'sections.*' => 'string|in:A,B,C,D,E',  // Ensure valid section values
        ]);
    
        try {
            $data = new Subject();
            $data->userid = $request->input('userid');
            $data->subject_name = $request->input('subject_name');
            $data->subject_section = implode(',', $request->input('sections')); // Convert array to string
            $data->save();
    
            // Set success message
            return redirect()->back()->with('success', 'Subject created successfully!');
        } catch (\Exception $e) {
            // Set error message if something goes wrong
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function viewSubject(){
        $data = Subject::where('userid', Auth::id())->get();
        return view('subject.view', compact('data'));
    }
    

    public function subjectDelete($id){
        if ($id) {
            // Find the subject that belongs to the authenticated user
            $subject = Subject::where('id', $id)->where('userid', Auth::user()->id)->first();
    
            if ($subject) {
                // Delete the subject
                $subject->delete();
    
                return redirect()->back()->with('success', 'Subject deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'Subject not found or unauthorized.');
            }
        }
        
        return redirect()->back()->with('error', 'Invalid request.');
    }
    
}
