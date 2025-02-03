<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use App\Models\{Question, Subject};
use Illuminate\Support\Facades\Auth;
class DocController extends Controller
{


    public function downloadDoc(Request $request)
    {
        $validated = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
        ]);
    
        $user = Auth::user();
        $subject_id = $request->subject_id;
        $subject = Subject::where('id', $subject_id)->where('userid', $user->id)->first();
    
        if (!$subject) {
            return redirect()->back()->with('error', 'Subject not found.');
        }
    
        // Fetch questions and group them by section
        $questions = Question::where('subject_id', $subject_id)
            ->where('userid', $user->id)
            ->orderBy('section_of_question') // Sort by section
            ->orderBy('id') // Then by ID within each section
            ->get()
            ->groupBy('section_of_question'); // Group by section
    
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
    
        // Title Styling
        $titleStyle = ['bold' => true, 'size' => 16, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER];
        $section->addText('Subject: ' . strtoupper($subject->subject_name), $titleStyle);
        $section->addTextBreak(1);
    
        if ($questions->isEmpty()) {
            $section->addText("No questions available for this subject.", ['italic' => true, 'size' => 12]);
        } else {
            foreach ($questions as $sectionTitle => $sectionQuestions) {
                $section->addTextBreak(1);
                $section->addText("SECTION " . strtoupper($sectionTitle), ['bold' => true, 'size' => 14, 'underline' => 'single']);
                $section->addTextBreak(1);
    
                $questionNumber = 1; // Reset question number for each section
    
                foreach ($sectionQuestions as $question) {
                    // Question Styling
                    $section->addText($questionNumber . ". " . $question->question, ['bold' => true, 'size' => 12]);
                    
                    // Answer Options Styling
                    $optionStyle = ['size' => 11, 'spaceAfter' => 100];
                    $section->addText("A) " . $question->option_a, $optionStyle);
                    $section->addText("B) " . $question->option_b, $optionStyle);
                    $section->addText("C) " . $question->option_c, $optionStyle);
                    $section->addText("D) " . $question->option_d, $optionStyle);
    
                    $section->addTextBreak(1);
                    $questionNumber++;
                }
            }
        }
    
        $fileName = Auth::user()->name.'_'.Auth::user()->lname . '_' . $subject->subject_name . '.docx';
        $writer = IOFactory::createWriter($phpWord, 'Word2007');
    
        // Stream the file as a download
        return response()->stream(function() use ($writer) {
            $writer->save('php://output');
        }, 200, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    }
    
    
}
