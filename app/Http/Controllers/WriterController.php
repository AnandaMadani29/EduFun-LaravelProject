<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }
    
    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        $courses = $writer->courses()->with('category')->get();
        
        return view('writer-courses', compact('writer', 'courses'));
    }
}
