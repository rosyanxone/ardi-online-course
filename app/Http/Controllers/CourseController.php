<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function home() {
        $courses = Course::all();
        
        return view('home', compact('courses'));
    }

    function materials($slug) {
        $course = Course::where('slug', $slug)->first();
        $materials = Material::where('course_id', $course->id)->get();

        return view('course.materials', compact(['course', 'materials']));
    }

    function index() {
        $courses = Course::paginate(10);
        
        return view('course.index', compact('courses'));
    }

    function create() {
        return view('course.create');
    }
}
