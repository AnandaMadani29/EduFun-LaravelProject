<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function show($slug)
    {
        $course = Course::with(['category', 'writer'])
            ->where('slug', $slug)
            ->firstOrFail();
        
        // Increment views
        $course->increment('views');
        
        return view('course', compact('course'));
    }
}
