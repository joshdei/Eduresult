<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\Subject;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Redirect to the homepage or desired route
        return redirect('/');
    }

   
    
   
    public function dashboard()
    {   
        if (auth()->check()) {
            return redirect()->route('viewsubject');
        } else {
            // If not authenticated, redirect to home
            return redirect()->route('/');
        }
    }
    
    }


    
