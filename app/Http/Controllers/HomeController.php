<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        // Get latest courses for home page
        $courses = Course::with(['category', 'writer'])
            ->latest()
            ->take(6)
            ->get();
        
        return view('home', compact('courses'));
    }
    
    public function popular()
    {
        // Get popular courses (sorted by views) with pagination
        $courses = Course::with(['category', 'writer'])
            ->orderBy('views', 'desc')
            ->paginate(3);
        
        return view('popular', compact('courses'));
    }
}
