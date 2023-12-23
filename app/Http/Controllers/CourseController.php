<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function home() {
        $courses = Course::all();
        
        return view('home', compact('courses'));
    }

    function index() {
        $courses = Course::paginate(10);
        
        return view('course.index', compact('courses'));
    }
}
